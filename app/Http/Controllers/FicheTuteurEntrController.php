<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Stage;
use App\Contact;
use App\Tuteur;
use App\Entreprise;

use App\Disponibilite;

use Request;
use Input;

use App\Http\Requests\SoutenanceRequest;


/*
 *
 * /!\ ATTENTION /!\
 * Les requests sont géré par la facade dans cette page (a cause des rqts ajax)
 *
*/
//

class FicheTuteurEntrController extends Controller
{
  public static $ID_STAGIAIRES = 1;
  public static $ID_FICHE_AVIS_STAGIAIRE = 2;
  public static $ID_FICHE_VISITE = 3;
  public static $ID_FICHE_SOUTENANCE = 4;

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
          return view('outils.aucunStagiaire')->with(['id' => $id]);
        }

      // Si vue "Fiche d'appreciation du stagiaire"
      }else if($id == FicheTuteurEntrController::$ID_FICHE_AVIS_STAGIAIRE){
        $nbStagiaires = Stage::infosByTuteur(session('uid'))->count();

        if($nbStagiaires > 1){ // S'il y en a plus d'un, on fait choisir dans la liste
          $stages = Stage::infosByTuteur(session('uid'))->get();

          return view('outils.choixStagiaire')->with(['id' => $id, 'stages' => $stages]);
        }else if($nbStagiaires == 1){ // S'il y a un unique stagiaire, on le prend par default

          $idEtudiantFocus = Stage::infosByTuteur(session('uid'))->first()->idEtudiant;
          session(['idEtudiantFocus' => $idEtudiantFocus]);

          return view('tuteurEntreprise.fiche')->with(['id' => $id, 'data' => $this->dataToAvisStagiaire()]);
        }else if($nbStagiaires == 0){ // S'il n'y a aucun stagiaire => Erreur
          return view('outils.aucunStagiaire')->with(['id' => $id]);
        }

      }else if($id == FicheTuteurEntrController::$ID_FICHE_SOUTENANCE){
        $data['dureeCreneau'] = Disponibilite::getDureeMinute();
        $data['heureDebut'] = Disponibilite::getDebutMinute();
        $data['heureFin'] = Disponibilite::getFinMinute();
        $data['date'] = Disponibilite::getDate();

        $data['dispo'][0] = Disponibilite::heureDispoToArray(0);
        $data['dispo'][1] = Disponibilite::heureDispoToArray(1);

        return view('commun.dispoSoutenance')->with(['id' => $id, 'data' => $data]);
      }

      return "Error.";
  }

  public function submitFiche($id){
    // Si fiche avis sur le stagiaire
    if($id == FicheTuteurEntrController::$ID_FICHE_AVIS_STAGIAIRE){
      return $this->traitementSubmitAvisEtudiant($id);
    }else if($id == FicheTuteurEntrController::$ID_FICHE_SOUTENANCE){
      return $this->traitementSubmitSoutenance($id);
    }
  }

  private function traitementSubmitSoutenance($id){

    Disponibilite::deleteDispoByUser(session('uid'));

    if(Request::get('creneaux0') != null){
      foreach (Request::get('creneaux0') as $heure) {
        Disponibilite::make(session('uid'), $heure, 0);
      }
    }

    if(Request::get('creneaux1') != null){
      foreach (Request::get('creneaux1') as $heure) {
        Disponibilite::make(session('uid'), $heure, 1);
      }
    }

    session()->flash('registred', true);

    return redirect()->route('ficheTuteurEntre', ['id' => $id]);
  }

  public function traitementSubmitAvisEtudiant($id){
    // Viens de la vue choix du stagiaire
    if(Request::get('idStagiaire') != null){
      session(['idEtudiantFocus' => Request::get('idStagiaire')]);
      return view('tuteurEntreprise.fiche')->with(['id' => $id, 'data' => $this->dataToAvisStagiaire()]);
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

      $contactRH = Contact::where('idEntreprise', $tuteur->idEntreprise)->where('type', 1);
      if($contactRH->count() == 0){
        $contactRH = new Contact(['idEntreprise'=>$tuteur->idEntreprise, 'type'=>1, 'nom'=> Request::get('nomRH'), 'email'=> Request::get('emailRH'), 'telephone'=> Request::get('telRH')]);
      }else{
        $contactRH = $contactRH->first();
        $contactRH->nom = Request::get('nomRH');
        $contactRH->email = Request::get('emailRH');
        $contactRH->telephone = Request::get('telRH');
      }

      $contactTA = Contact::where('idEntreprise', $tuteur->idEntreprise)->where('type', 2);
      if($contactTA->count() == 0){
        $contactTA = new Contact(['idEntreprise'=>$tuteur->idEntreprise, 'type'=>2, 'nom'=> Request::get('nomTA'), 'email'=> Request::get('emailTA'), 'telephone'=> Request::get('telTA')]);
      }else{
        $contactTA = $contactTA->first();
        $contactTA->nom = Request::get('nomTA');
        $contactTA->email = Request::get('emailTA');
        $contactTA->telephone = Request::get('telTA');
      }

      $contactRE = Contact::where('idEntreprise', $tuteur->idEntreprise)->where('type', 3);
      if($contactRE->count() == 0){
        $contactRE = new Contact(['idEntreprise'=>$tuteur->idEntreprise, 'type'=>3, 'nom'=> Request::get('nomRE'), 'email'=> Request::get('emailRE'), 'telephone'=> Request::get('telRE')]);
      }else{
        $contactRE = $contactRE->first();
        $contactRE->nom = Request::get('nomRE');
        $contactRE->email = Request::get('emailRE');
        $contactRE->telephone = Request::get('telRE');
      }


      $contactRH->save();
      $contactTA->save();
      $contactRE->save();

      session()->forget('idEtudiantFocus');

      return redirect()->route('ficheTuteurEntre', ['id' => $id]);
    }

  }

  public function dataToAvisStagiaire(){

    $data = [];

    $appreciationStagiaire = Stage::appreciationStagiaire(session('idEtudiantFocus'));
    $data['appreciation'] = $appreciationStagiaire;

    $entreprise = Tuteur::where('idUtilisateur', session('uid'))->first(['idEntreprise']);
    $contact = Entreprise::contact($entreprise->idEntreprise);

    if($contact->count() == 0){
      $contact[0] = new Contact;
      $contact[1] = new Contact;
      $contact[2] = new Contact;
    }

    $data['contact'] = $contact;

    return $data;
  }

  public function ajaxChangerStatusStage(){
    if(Request::ajax()){
      $data = Request::All();

      $stage = Stage::where('idTuteur', session('uid'))->where('id', $data['id'])->first();

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
