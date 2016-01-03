<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\LocalisationRequest;
use App\Http\Requests\CorrespondanteRequest;
use App\Http\Controllers\Controller;

use App\Entreprise;
use App\Tuteur;
use App\Etudiant;
use App\Utilisateur;
use App\Stage;

use Route;

class FicheEtudiantController extends Controller
{

    public static $ID_FICHE_LOCALISATION = 1;

    // Point entrée GET des étudiants
    public function index($id = 0)
    {
        $data = [];

        if($id == FicheEtudiantController::$ID_FICHE_LOCALISATION){
          $stage = Stage::infos(session('uid'));
          $data['stage'] = $stage;

          $etudiant = Etudiant::infos(session('uid'));
          $data['etudiant'] = $etudiant;
        }

        return view('etudiant.fiche')->with(['id' => $id, 'data' => $data]);
    }

    // Entrée POST des étudiants
    public function submitFiche($id = 0, LocalisationRequest $request)
    {
        if($id == FicheEtudiantController::$ID_FICHE_LOCALISATION){

          return $this->traitementSubmitLocalisation(FicheEtudiantController::$ID_FICHE_LOCALISATION, $request);
        }

        return 'Error.';
    }

    private function traitementSubmitLocalisation($id, $request){

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

}
