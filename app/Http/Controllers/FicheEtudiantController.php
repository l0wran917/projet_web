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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id = 0)
    {
        return view('etudiant.fiche')->with(['id'=>$id]);
    }

    public function submitFiche($id = 0, LocalisationRequest $request)
    {
        if($id == FicheEtudiantController::$ID_FICHE_LOCALISATION){
          return $this->traitementSubmitLocalisation(FicheEtudiantController::$ID_FICHE_LOCALISATION, $request);
        }

        return 'Error.';
    }

    private function traitementSubmitLocalisation($id, $request){

      // Stocke les infos du formulaire en session
      session(['requestFicheLocalisation' => $request->all()]);

      // Cherche les entreprises qui peuvent correspondre
      $entreprisesIdentique = $this->entrepriseExisteInDBByCP($request->input('nomEtablissement'), $request->input('cpEtablissement'));

      if(count($entreprisesIdentique) > 0){
        // Retourne la vue de selection parmi les entreprises dont le nom ressemble et sont dans la même ville
        return view('etudiant.entrepriseCorrespondante')->with(['entreprises' => $entreprisesIdentique, 'id' => $id]);
        // La vue envoi les infos à la fct : traitementSubmitLocalisationEntreprise
      }else{
        // Aucune entreprise identique, continue le traitement
        $this->traitementSubmitLocalisationEntreprise($id, new CorrespondanteRequest());
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
        $entreprisesIdentique = $this->entrepriseExisteInDBByCP($requestFicheLocalisation['nomEtablissement'], $requestFicheLocalisation['cpEtablissement']);

        // Stocke en session l'id de l'entreprise
        $requestFicheLocalisation['idEntreprise'] = $entreprisesIdentique[$request->inputCorrespondante - 1]->id;
        session(['requestFicheLocalisation' => $requestFicheLocalisation]);

        // echo 'Entreprise récuperée';
      }

      // Suite du traitement vers tuteur
      return $this->traitementVerifTuteur($id);
    }

    private function traitementVerifTuteur($id){
      $tuteursIdentique = $this->tuteurExisteInDBByEntreprise(session('requestFicheLocalisation')['nomResponsable'], session('requestFicheLocalisation')['idEntreprise']);

      if(count($tuteursIdentique) > 0){
        // Retourne la vue de selection parmi les tuteurs dont le nom ressemble et sont dans l'entreprise
        return view('etudiant.tuteurCorrespondant')->with(['tuteurs' => $tuteursIdentique, 'id' => $id]);
        // La vue envoi les infos à la fct : traitementSubmitLocalisationTuteurs
      }else{
        // Aucun tuteur identique, continue le traitement
        $this->traitementSubmitLocalisationTuteurs($id, new CorrespondanteRequest());
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

        $utilisateur->save();

        $tuteur = new Tuteur;

        $tuteur->idUtilisateur = $utilisateur->id;
        $tuteur->idEntreprise = $requestFicheLocalisation['idEntreprise'];

        $tuteur->save();

        // echo 'Tuteur créé';
      }else{ // Ancien tuteur

        // Recupere les tuteurs listés
        $tuteursIdentique = $this->tuteurExisteInDBByEntreprise($requestFicheLocalisation['nomResponsable'], $requestFicheLocalisation['idEntreprise']);

        // Stocke en session l'id utilisateur du tuteur
        $requestFicheLocalisation['idTuteur'] = $tuteursIdentique[$request->inputCorrespondante - 1]->idUtilisateur;
        session(['requestFicheLocalisation' => $requestFicheLocalisation]);

        // echo 'Tuteur récuperé';
      }

      // Suite du traitement vers tuteur
      return $this->traitementVerifStage($id);
    }

    public function traitementVerifStage($id){
      $stage =  Stage::where('idUtilisateur', session('uid'))->first();

      // Aucun stage existant, on en créer un
      if(count($stage) == 0){
        $stage = new Stage;
      }

      // Renseigne les infos (update ou init, peu importe)
      $stage->idUtilisateur = session('uid');
      $stage->idTuteur = session('requestFicheLocalisation')['idTuteur'];
      $stage->save();

      session(['idStage' => $stage->id]);

      // redirection vers formulaire avec msg succes
      return redirect()->route('ficheEtudiant', ['id' => $id, 'submitted' => true ]);
    }

    // Utilisataire (A bouger dans les models)

    private function entrepriseExisteInDBByCP($nomEtablissement, $codePostal){
      $entreprisesIdentique = [];

      // Order by est obligatoire !
      // Si une entreprise est créer entre temps, cela n'infue pas les id dans les formulaires des autres
      $entreprises = Entreprise::where('cp', $codePostal)->orderBy('id')->get();

      foreach ($entreprises as $entreprise) {
        if(soundex($nomEtablissement) == soundex($entreprise->nom)){
          array_push($entreprisesIdentique, $entreprise);
        }
      }

      return $entreprisesIdentique;
    }

    private function tuteurExisteInDBByEntreprise($nomTuteur, $idEntreprise){
      $tuteursIdentique = [];

      // Order by est obligatoire !
      // Si un tuteur est créer entre temps, cela n'infue pas les id dans les formulaires des autres
      $tuteurs = Tuteur::where('idEntreprise', $idEntreprise)->orderBy('idUtilisateur')->get();

      foreach ($tuteurs as $tuteur) {
        if(soundex($nomTuteur) == soundex($tuteur->details->nom)){
          array_push($tuteursIdentique, $tuteur);
        }
      }

      return $tuteursIdentique;
    }
}
