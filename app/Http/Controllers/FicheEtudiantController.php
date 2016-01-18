<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\LocalisationRequest;
use App\Http\Requests\CorrespondanteRequest;
use App\Http\Requests\AvisEtudiantRequest;
use App\Http\Requests\SoutenanceRequest;
use App\Http\Controllers\Controller;

use App\Entreprise;
use App\Tuteur;
use App\Etudiant;
use App\Utilisateur;
use App\Stage;

use App\Disponibilite;

use Route;

class FicheEtudiantController extends Controller
{

    public static $ID_FICHE_LOCALISATION = 1;
    public static $ID_FICHE_AVIS_STAGE = 2;
    public static $ID_FICHE_SOUTENANCE = 5;

    // Point entrée GET des étudiants
    public function index($id = 0)
    {
        $data = [];

        if($id == FicheEtudiantController::$ID_FICHE_LOCALISATION){
          $stage = Stage::infos(session('uid'));
          $data['stage'] = $stage;

          $etudiant = Etudiant::infos(session('uid'));
          $data['etudiant'] = $etudiant;
        }else if($id == FicheEtudiantController::$ID_FICHE_AVIS_STAGE){
          $stage = Stage::where('idEtudiant', session('uid'))->first();

          if($stage == null){
            return view('etudiant.erreur.stageAbsent')->with(['id' => $id]);
          }

          $data['stage'] = $stage;
        }else if($id == FicheEtudiantController::$ID_FICHE_SOUTENANCE){

          $data['dureeCreneau'] = Disponibilite::getDureeMinute();
          $data['heureDebut'] = Disponibilite::getDebutMinute();
          $data['heureFin'] = Disponibilite::getFinMinute();
          $data['date'] = Disponibilite::getDate();

          $data['dispo'][0] = Disponibilite::heureDispoToArray(0);
          $data['dispo'][1] = Disponibilite::heureDispoToArray(1);

          return view('commun.dispoSoutenance')->with(['id' => $id, 'data' => $data]);
        }

        return view('etudiant.fiche')->with(['id' => $id, 'data' => $data]);
    }

    // Entrée POST des étudiants
    public function submitFiche($id = 0, Request $request)
    {
        if($id == FicheEtudiantController::$ID_FICHE_LOCALISATION){
          return $this->traitementSubmitLocalisation($id, $request);
        }else if($id == FicheEtudiantController::$ID_FICHE_AVIS_STAGE){
          return $this->traitementSubmitAvis($id, $request);
        }else if($id == FicheEtudiantController::$ID_FICHE_SOUTENANCE){
          return $this->traitementSubmitSoutenance($id, $request);
        }

        return 'Error.';
    }

    private function traitementSubmitSoutenance($id, $request){
      $this->validate($request, SoutenanceRequest::rules());

      Disponibilite::deleteDispoByUser(session('uid'));

      foreach ($request->creneaux0 as $heure) {
        $dispo = new Disponibilite;
        $dispo->idUtilisateur = session('uid');
        $dispo->debutMinute = $heure;
        $dispo->numJour = 0;
        $dispo->save();
      }

      foreach ($request->creneaux1 as $heure) {
        $dispo = new Disponibilite;
        $dispo->idUtilisateur = session('uid');
        $dispo->debutMinute = $heure;
        $dispo->numJour = 1;
        $dispo->save();
      }

      session()->flash('registred', true);

      return redirect()->route('ficheEtudiant', ['id' => $id]);
    }

    private function traitementSubmitLocalisation($id, $request){
      $this->validate($request, LocalisationRequest::rules());

      // Stockage du plan acces => Image non serializable dans session
      if($request->hasFile('planAcces')){
        $nomFichierPlan = md5_file($request->file('planAcces'));
        $request->file('planAcces')->move(public_path() . "/uploads/plan", $nomFichierPlan);
      }

      // Stocke les infos du formulaire en session
      session(['requestFicheLocalisation' => $request->except('planAcces')]);

      if(isset($nomFichierPlan)){
        // Recupere les infos du formulaire pour y ajouter le nom du fichier du plan
        $requestFicheLocalisation = session('requestFicheLocalisation');
        $requestFicheLocalisation['nomPlanAcces'] = $nomFichierPlan;

        // Stocke les infos du formulaire en session
        session(['requestFicheLocalisation' => $requestFicheLocalisation]);
      }

      // Cherche les entreprises qui peuvent correspondre
      $entreprisesIdentique = Entreprise::existeInDBByCP($request->input('nomEtablissement'), $request->input('cpEtablissement'));

      if(count($entreprisesIdentique) > 0){
        // Retourne la vue de selection parmi les entreprises dont le nom ressemble et sont dans la même ville
        return view('etudiant.entrepriseCorrespondante')->with(['entreprises' => $entreprisesIdentique, 'id' => $id]);
        // La vue envoi les infos à la fct : traitementSubmitLocalisationEntreprise
      }else{
        // Aucune entreprise identique, continue le traitement
        return $this->traitementSubmitLocalisationEntreprise($id, new CorrespondanteRequest());
      }
    }

    public function traitementSubmitLocalisationEntreprise($id, CorrespondanteRequest $request){

      // Nouvelle entreprise
      if($request->input('inputCorrespondante') == null || $request->input('inputCorrespondante') == 0){

        // Recupere les infos du formulaire
        $requestFicheLocalisation = session('requestFicheLocalisation');

        // Créer une entreprise avec les bonnes infos
        $entreprise = new Entreprise;

        $entreprise->nom = $requestFicheLocalisation['nomEtablissement'];
        $entreprise->rue = $requestFicheLocalisation['adresseEtablissement'];
        $entreprise->cp = $requestFicheLocalisation['cpEtablissement'];
        $entreprise->ville = $requestFicheLocalisation['villeEtablissement'];

        // Enregistre l'entreprise puis stocke en session l'id
        $entreprise->save();
        $requestFicheLocalisation['idEntreprise'] = $entreprise->id;

        session(['requestFicheLocalisation' => $requestFicheLocalisation]);

        // echo 'Enterprise créée';
      }else{ // Entreprise dans la liste

        // Recupere les infos du formulaire
        $requestFicheLocalisation = session('requestFicheLocalisation');

        // Recupere les entreprises listés
        $entreprisesIdentique = Entreprise::existeInDBByCP($requestFicheLocalisation['nomEtablissement'], $requestFicheLocalisation['cpEtablissement']);

        // Stocke en session l'id de l'entreprise
        $requestFicheLocalisation['idEntreprise'] = $entreprisesIdentique[$request->inputCorrespondante - 1]->id;
        session(['requestFicheLocalisation' => $requestFicheLocalisation]);

        // echo 'Entreprise récuperée';
      }

      // Suite du traitement vers tuteur
      return $this->traitementVerifTuteur($id);
    }

    private function traitementVerifTuteur($id){
      $tuteursIdentique = Tuteur::existeInDBByEntreprise(session('requestFicheLocalisation')['nomResponsable'], session('requestFicheLocalisation')['idEntreprise']);

      if(count($tuteursIdentique) > 0){
        // Retourne la vue de selection parmi les tuteurs dont le nom ressemble et sont dans l'entreprise
        return view('etudiant.tuteurCorrespondant')->with(['tuteurs' => $tuteursIdentique, 'id' => $id]);
        // La vue envoi les infos à la fct : traitementSubmitLocalisationTuteurs
      }else{
        // Aucun tuteur identique, continue le traitement
        return $this->traitementSubmitLocalisationTuteurs($id, new CorrespondanteRequest());
      }
    }

    public function traitementSubmitLocalisationTuteurs($id, CorrespondanteRequest $request){

      // Recupere les infos du formulaire
      $requestFicheLocalisation = session('requestFicheLocalisation');

      // Nouveau tuteur
      if($request->input('inputCorrespondante') == null || $request->input('inputCorrespondante') == 0){

        $utilisateur = new Utilisateur;

        $utilisateur->nom = $requestFicheLocalisation['nomResponsable'];
        $utilisateur->prenom = $requestFicheLocalisation['prenomResponsable'];
        $utilisateur->email = $requestFicheLocalisation['emailResponsable'];

        $telResponsable = $requestFicheLocalisation['telResponsable'];
        if(substr($telResponsable, 0, 2) == "06" || substr($telResponsable, 0, 2) == "07"){
          $utilisateur->telPortable = $requestFicheLocalisation['telResponsable'];
        }else{
          $utilisateur->tel = $requestFicheLocalisation['telResponsable'];
        }

        $utilisateur->type = 2;
        $utilisateur->civilite = $requestFicheLocalisation['civiliteReponsable'];

        $utilisateur->save();

        $tuteur = new Tuteur;

        $tuteur->idUtilisateur = $utilisateur->id;
        $tuteur->idEntreprise = $requestFicheLocalisation['idEntreprise'];

        // Stocke en session l'id utilisateur du tuteur
        $requestFicheLocalisation['idTuteur'] = $utilisateur->id;
        session(['requestFicheLocalisation' => $requestFicheLocalisation]);

        // echo 'Tuteur créé';
      }else{ // Ancien tuteur

        // Recupere les tuteurs listés
        $tuteursIdentique = Tuteur::existeInDBByEntreprise($requestFicheLocalisation['nomResponsable'], $requestFicheLocalisation['idEntreprise']);

        // Stocke en session l'id utilisateur du tuteur
        $requestFicheLocalisation['idTuteur'] = $tuteursIdentique[$request->inputCorrespondante - 1]->idUtilisateur;

        $tuteur = Tuteur::where('idUtilisateur', $requestFicheLocalisation['idTuteur'])->first();
        $utilisateur = Utilisateur::where('id', $requestFicheLocalisation['idTuteur'])->first();

        $utilisateur->civilite = $requestFicheLocalisation['civiliteReponsable'];
        $utilisateur->save();

        session(['requestFicheLocalisation' => $requestFicheLocalisation]);

        // echo 'Tuteur récuperé';
      }

      $joursDispo = 0;
      foreach($requestFicheLocalisation['jourRencontre'] as $jour){
          $joursDispo += $jour;
      }
      $tuteur->joursDispoRencontre = $joursDispo;

      $tuteur->save();

      // Suite du traitement vers tuteur
      return $this->traitementVerifStage($id);
    }

    public function traitementVerifStage($id){
      // Recupere les infos du formulaire
      $requestFicheLocalisation = session('requestFicheLocalisation');

      // Recupere le stage
      $stage =  Stage::where('idEtudiant', session('uid'))->first();

      // Aucun stage existant, on en créer un
      if(count($stage) == 0){
        $stage = new Stage;
      }

      // Renseigne les infos (update ou init, peu importe)
      $stage->idEtudiant = session('uid');
      $stage->idTuteur = session('requestFicheLocalisation')['idTuteur'];
      $stage->sujet = $requestFicheLocalisation['sujetStage'];

      if(isset($requestFicheLocalisation['nomPlanAcces'])){
        $stage->planAcces = $requestFicheLocalisation['nomPlanAcces'];
      }

      $stage->save();

      // Recupere l'Etudiant et l'utilisation correspondant
      $etudiant = Etudiant::where('idUtilisateur', session('uid'))->first();
      $utilisateurEtudiant = Utilisateur::where('id', session('uid'))->first();

      // Mets à jour les infos
      $etudiant->telEntrepriseEtudiant = $requestFicheLocalisation['telEtudiantEntreprise'];
      $etudiant->emailPerso = $requestFicheLocalisation['emailEtudiantPerso'];
      $utilisateurEtudiant->telPortable = $requestFicheLocalisation['telEtudiantPortable'];

      // update
      $utilisateurEtudiant->save();
      $etudiant->save();

      // Vide les infos du formulaire de la session + signal ok pour vue
      session()->forget('requestFicheLocalisation');
      session()->flash('registred', true);

      // redirection vers formulaire avec msg succes
      return redirect()->route('ficheEtudiant', ['id' => $id]);
    }

    private function traitementSubmitAvis($id, $request){
      $this->validate($request, avisEtudiantRequest::rules());

      // Recupere le stage
      $stage =  Stage::where('idEtudiant', session('uid'))->first();

      // Update les infos
      $stage->remunerationStage = $request->remunerationStage;
      $stage->montantRemuneration = $request->montantRemuneration;

      $stage->encadrageInformaticien = $request->encadrageInformaticien;
      $stage->appelInformaticien = $request->appelInformaticien;

      $stage->travailSeul = $request->travailSeul;
      $stage->tailleEquipe = $request->tailleEquipe;

      if($request->typeMateriel=="PC")
      {
        $stage->typeMateriel = $request->typeMateriel;
      }
      else {
        $stage->typeMateriel = $request->typeMaterielAutreDetails;
      }

      $stage->typeSysteme = 0;
      foreach ($request->typeSysteme as $value) {
        //Valeur pour autre
        if($value == 16){
            $stage->typeSystemeAutre = $request->autreSysteme;
            $stage->typeSysteme += $value;
        }
        $stage->typeSysteme += $value;

      }

      $stage->langagesStage = $request->langages;

      $stage->objetPrincipal = 0;
      foreach ($request->objetStage as $value) {
        //Valeur pour autre
        if($value == 64){
            $stage->objetPrincipalAutre = $request->autreObjet;
        }
        $stage->objetPrincipal += $value;

      }

      $stage->satisactionStage = $request->satisactionStage;
      $stage->pourquoiSatisaction = $request->pourquoiSatisaction;

      $stage->satisactionObjectif = $request->objectifsAtteints;
      $stage->pourquoiObjectif = $request->objectifsAtteintsPourquoi;

      $stage->satisactionCours = $request->satisactionCours;

      $stage->pourquoiCours = $request->pourquoiCours;
      $stage->apportStage = $request->apportStage;


      // dd($stage);

      //Sauvegarde dans la base de données
      $stage->save();

      session()->flash('registred', true);

      return Redirect()->route('ficheEtudiant', ['id'=>$id]);
    }
}
