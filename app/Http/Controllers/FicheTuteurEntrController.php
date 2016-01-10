<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Stage;
use App\Contact;
use App\Tuteur;

use Request;
use Input;


/*
 *
 * /!\ ATTENTION /!\
 * Les requests sont géré par la facade dans cette page (a cause des rqts ajax)
 *
*/

class FicheTuteurEntrController extends Controller
{
  public static $ID_STAGIAIRES = 1;
  public static $ID_FICHE_AVIS_STAGIAIRE = 2;
  public static $ID_FICHE_VISITE = 3;

  // Point entrée GET des étudiants
  public function index($id = 0)
  {
      $data = [];

      // Si fiche "Mes Stagiaires"
      if($id == FicheTuteurEntrController::$ID_STAGIAIRES){
        $stages = Stage::infosByTuteur(session('uid'));

        if($stages->count() > 0){
          $data['nbStagiaires'] = $stages->count();
          $data['stages'] = $stages->get();

          return view('tuteurEntreprise.fiche')->with(['id' => $id, 'data' => $data]);
        }else{
          return view('tuteurEntreprise.aucunStagiaire')->with(['id' => $id]);
        }

      // Si vue "Fiche d'appreciation du stagiaire"
      }else if($id == FicheTuteurEntrController::$ID_FICHE_AVIS_STAGIAIRE){
        $nbStagiaires = Stage::infosByTuteur(session('uid'))->count();

        if($nbStagiaires > 1){ // S'il y en a plus d'un, on fait choisir dans la liste
          $stages = Stage::infosByTuteur(session('uid'))->get();
          return view('tuteurEntreprise.choixStagiaire')->with(['id' => $id, 'stages' => $stages]);
        }else if($nbStagiaires == 1){ // S'il y a un unique stagiaire, on le prend par default
          $idEtudiantFocus = Stage::infosByTuteur(session('uid'))->first()->idEtudiant;
          session(['idEtudiantFocus' => $idEtudiantFocus]);
          return view('tuteurEntreprise.fiche')->with(['id' => $id]);
        }else if($nbStagiaires == 0){ // S'il n'y a aucun stagiaire => Erreur
          return view('tuteurEntreprise.aucunStagiaire')->with(['id' => $id]);
        }

      }else{
          return view('tuteurEntreprise.fiche')->with(['id' => $id]);
      }

      return "Error.";
  }

  public function submitFiche($id){
    // Si fiche avis sur le stagiaire
    if($id == FicheTuteurEntrController::$ID_FICHE_AVIS_STAGIAIRE){
      return $this->traitementSubmitAvisEtudiant($id);
    }
  }

  public function traitementSubmitAvisEtudiant($id){
    // Viens de la vue choix du stagiaire
    if(Request::get('idStagiaire') != null){
      session(['idEtudiantFocus' => Request::get('idStagiaire')]);
      return view('tuteurEntreprise.fiche')->with(['id' => $id]);
    }else{
      $stage = Stage::where('idEtudiant', session('idEtudiantFocus'))->first();

      $stage->niveauConnaissance = Request::get('niveauConnaissance');
      $stage->niveauOrganisation = Request::get('niveauOrganisation');
      $stage->niveauInitiative = Request::get('niveauInitiative');
      $stage->niveauPerseverance = Request::get('niveauPerseverance');
      $stage->niveauEfficacite = Request::get('niveauEfficacite');
      $stage->niveauInteret = Request::get('niveauInteret');

      $stage->niveauPresentation = Request::get('niveauPresentation');
      $stage->niveauPonctualite = Request::get('niveauPonctualite');
      $stage->niveauAssiduite = Request::get('niveauAssiduite');
      $stage->niveauExpression = Request::get('niveauExpression');
      $stage->niveauSociabilite = Request::get('niveauSociabilite');
      $stage->niveauCommunication = Request::get('niveauCommunication');

      $stage->embaucheEtudiant = Request::get('embaucheEtudiant');
      $stage->embauchePourquoi = Request::get('embauchePourquoi');
      $stage->tuteurPresentSoutenance = Request::get('presentSoutenance');

      $stage->save();

      $tuteur = Tuteur::where('idUtilisateur', $stage->idTuteur)->first();

      $contactRH = new Contact(['idEntreprise'=>$tuteur->idEntreprise, 'type'=>1, 'nom'=> Request::get('nomRH'), 'email'=> Request::get('emailRH'), 'telephone'=> Request::get('telRH')]);
      $contactTA = new Contact(['idEntreprise'=>$tuteur->idEntreprise, 'type'=>2, 'nom'=> Request::get('nomTA'), 'email'=> Request::get('emailTA'), 'telephone'=> Request::get('telTA')]);
      $contactRE = new Contact(['idEntreprise'=>$tuteur->idEntreprise, 'type'=>3, 'nom'=> Request::get('nomRE'), 'email'=> Request::get('emailRE'), 'telephone'=> Request::get('telRE')]);

      $contactRH->save();
      $contactTA->save();
      $contactRE->save();

      session()->forget('idEtudiantFocus');

      return redirect()->route('ficheTuteurEntre', ['id' => $id]);
    }

  }

  public function ajaxDetailEtudiant(){
    if(Request::ajax()){
      $data = Request::All();

      $stages = Stage::infosByTuteur(session('uid'))->where('idEtudiant', $data['id'])->get();

      return $stages;
    }else{
      return "Error.";
    }
  }

  public function ajaxChangerStatusStage(){
    if(Request::ajax()){
      $data = Request::All();

      $stage = Stage::where('idTuteur', session('uid'))->where('idEtudiant', $data['id'])->first();

      if($data['status'] == "0"){
        $stage->tuteurValide = false;
      }else{
        $stage->tuteurValide = true;
      }

      $stage->save();

      return "1";
    }else{
      return "Error.";
    }
  }

}
