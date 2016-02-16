<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Carbon;
use App\Stage;
use App\Tuteur;
use App\Contact;
use App\Etudiant;
use App\Entreprise;
use App\Utilisateur;
use App\Disponibilite;
use App\DemandeAppariement;

use App\Http\Requests\SoutenanceRequest;
use App\Http\Requests\compteRenduVisiteRequest;

class FicheTuteurEnsController extends Controller
{

    public static $ID_FICHE_VISITE = 1;
    public static $ID_FICHE_APPARIEMENT = 2;
    public static $ID_FICHE_SOUTENANCE = 3;

    public function index($id)
    {
      $data = [];

      if($id == FicheTuteurEnsController::$ID_FICHE_APPARIEMENT){
        $etudiants = Etudiant::infos()->orderBy('nom')->orderBy('prenom')->select('idEtudiant', 'nom', 'prenom')->get();

        $data['etudiants'] = $etudiants;

        $demandes = DemandeAppariement::infos(session('uid'));
        $data['demandes'] = $demandes;

      }else if($id == FicheTuteurEnsController::$ID_FICHE_VISITE){

        $stages = Stage::infosByEnseignant(session('uid'));
        if(session()->has('registred')){

          return view('tuteurEnseignant.fiche')->with(['id' => $id, 'data' => $this->dataToCompteRenduVisite()]);
        }else if(count($stages) > 1 && !session()->has('registred')){

          return view('outils.choixStagiaire')->with(['id' => $id, 'stages' => $stages]);
        }else if(count($stages) == 1){
          $idEtudiantFocus = Stage::infosByEnseignant(session('uid'))->first()->idEtudiant;
          session(['idEtudiantFocus' => $idEtudiantFocus]);

          return view('tuteurEnseignant.fiche')->with(['id' => $id, 'data' => $this->dataToCompteRenduVisite()]);
        }else if(count($stages) == 0){
          return view('outils.aucunStagiaire')->with(['id' => $id]);
        }

        $data['test'] = '3';
      }else if($id == FicheTuteurEnsController::$ID_FICHE_SOUTENANCE){
        $data['dureeCreneau'] = Disponibilite::getDureeMinute();
        $data['heureDebut'] = Disponibilite::getDebutMinute();
        $data['heureFin'] = Disponibilite::getFinMinute();
        $data['date'] = Disponibilite::getDate();

        $data['dispo'][0] = Disponibilite::heureDispoToArray(0);
        $data['dispo'][1] = Disponibilite::heureDispoToArray(1);

        return view('commun.dispoSoutenance')->with(['id' => $id, 'data' => $data]);
      }

      return view('tuteurEnseignant.fiche')->with(['id'=>$id, 'data'=>$data]);
    }

    public function submitFiche($id, Request $request){
      if($id == FicheTuteurEnsController::$ID_FICHE_APPARIEMENT){
        return $this->traitementSubmitAppariement($id, $request);
      }else if($id == FicheTuteurEnsController::$ID_FICHE_VISITE){
        return $this->traitementSubmitCRVisite($id, $request);
      }else if($id == FicheTuteurEnsController::$ID_FICHE_SOUTENANCE){
        return $this->traitementSubmitSoutenance($id, $request);
      }

      return "Error.";
    }

    private function traitementSubmitSoutenance($id, $request){
      // $this->validate($request, SoutenanceRequest::rules());

      Disponibilite::deleteDispoByUser(session('uid'));

      if($request->creneaux0 != null){
        foreach ($request->creneaux0 as $heure) {
          Disponibilite::make(session('uid'), $heure, 0);
        }
      }

      if($request->creneaux1 != null){
        foreach ($request->creneaux1 as $heure) {
          Disponibilite::make(session('uid'), $heure, 1);
        }
      }

      session()->flash('registred', true);

      return redirect()->route('ficheTuteurEns', ['id' => $id]);
    }

    public function traitementSubmitCRVisite($id, $request){
      // Viens de la vue choix du stagiaire
      if($request->idStagiaire != null){
        session(['idEtudiantFocus' => $request->idStagiaire]);
        return view('tuteurEnseignant.fiche')->with(['id' => $id, 'data' => $this->dataToCompteRenduVisite()]);
      }else{
        $this->validate($request, compteRenduVisiteRequest::rules());

        $stage = Stage::where('idEtudiant', session('idEtudiantFocus'))->first();
        $tuteur = Tuteur::where('idUtilisateur', $stage->idTuteur)->first();
        $contact = Contact::where('idEntreprise', $tuteur->idEntreprise)->where('type', 1)->first();

        $stage->deplacementEnseignantVisite = $request->deplacementEnseignant;
        $dateDeplacementEnseignant = Carbon\Carbon::createFromFormat('d/m/Y', $request->dateDeplacementEnseignant);
        $stage->dateDeplacementEnseignantVisite = $dateDeplacementEnseignant;

        $stage->nomResponsableVisite = $request->nomResponsable;
        $stage->prenomResponsableVisite = $request->prenomResponsable;
        $stage->fonctionResponsableVisite = $request->fonctionResponsable;

        $stage->encadrageInformaticienVisite = $request->encadrageInformaticien;
        $stage->appelInformaticienVisite = $request->appelInformaticien;
        $stage->travailSeulVisite = $request->travailSeul;
        $stage->tailleEquipeVisite = $request->tailleEquipe;

        $stage->objetPrincipalVisite = 0;
        foreach ($request->objetStage as $value) {
          //Valeur pour autre
          if($value == 64){
              $stage->objetPrincipalAutreVisite = $request->autreObjet;
          }
          $stage->objetPrincipalVisite += $value;
        }

        $stage->avisTravailComportementVisite = $request->niveauTravail;

        $stage->formationManquanteVisite = $request->formationManquante;
        $stage->formationManquanteDetailsVisite = $request->formationManquanteDetails;

        $stage->avisStageVisite = $request->avisEnseignant;
        $stage->accueilNouveauxEtudiantVisite = $request->precautionStage;
        $stage->precautionAcceuilNouveauxVisite = $request->precautionDetailsStage;

        if(count($contact) == 0){
          $contact = new Contact;
          $contact->idEntreprise = $tuteur->idEntreprise;
          $contact->type=1;
        }
        $contact->nom = $request->nomRH;
        $contact->email = $request->emailRH;
        $contact->telephone = $request->telRH;


        $stage->save();
        $contact->save();


        // session()->forget('idEtudiantFocus');
        session()->flash('registred', true);

        return redirect()->route('ficheTuteurEns', ['id' => $id]);
      }
    }

    public function traitementSubmitAppariement($id, $request){
      $this->validate($request, ['idEtudiant' => 'required']);

      $stage = Stage::where('idEtudiant', $request->idEtudiant)->select('id', 'idEtudiant')->first();

      if(count($stage) == 0){
        $stage = new Stage;
        $stage->idEtudiant = $request->idEtudiant;
        $stage->save();
      }

      $demande = DemandeAppariement::where('idEnseignant', session('uid'))->where('idStage', $stage->id)->first();
      if(count($demande) == 0){
        $demande = new DemandeAppariement;
        $demande->idEnseignant = session('uid');
        $demande->idStage = $stage->id;
        $demande->save();
      }

      session()->flash('registred', true);
      return redirect()->route('ficheTuteurEns', ['id' => $id]);
    }

    // Encore utilisé quelque part ?
    public function ajaxDetailEtudiant(){
      if(Request::ajax()){
        $data = Request::All();

        $stages = Stage::infosByTuteur(session('uid'))->where('idEtudiant', $data['id'])->get();

        return $stages;
      }else{
        return "Error.";
      }
    }

    public function dataToCompteRenduVisite(){
      $data = [];

      $stage = Stage::where('idEtudiant', session('idEtudiantFocus'))->first();
      $entreprise = [];
      $contact = [];

      if(count($stage) > 0){
        $tuteur = Tuteur::where('idUtilisateur', $stage->idTuteur)->first();
        if(count($tuteur) > 0){
          $entreprise = Entreprise::where('id', $tuteur->idEntreprise)->first();
          if(count($entreprise) > 0){
            $contact = Contact::where('idEntreprise', $entreprise->id)->where('type', 1)->first();
          }
        }
      }

      if(count($entreprise) == 0){
        $entreprise = new Entreprise;
      }
      $data['entreprise'] = $entreprise;

      if(count($stage) == 0){
        $stage = new Stage;
      }
      $data['stage'] = $stage;

      if(count($contact) == 0){
        $contact = new Contact;
      }
      $data['contact'] = $contact;

      // dd($entreprise);

      return $data;
    }

}
