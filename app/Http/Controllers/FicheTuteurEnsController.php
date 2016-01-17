<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Stage;
use App\Etudiant;
use App\Utilisateur;
use App\DemandeAppariement;

class FicheTuteurEnsController extends Controller
{

    public static $ID_FICHE_APPARIEMENT = 2;

    public function index($id)
    {
      $data = [];

      if($id == FicheTuteurEnsController::$ID_FICHE_APPARIEMENT){
        $etudiants = Etudiant::infos()->orderBy('nom')->orderBy('prenom')->select('idEtudiant', 'nom', 'prenom')->get();

        $data['etudiants'] = $etudiants;

        $demandes = DemandeAppariement::infos(session('uid'));
        $data['demandes'] = $demandes;
      }

      return view('tuteurEnseignant.fiche')->with(['id'=>$id, 'data'=>$data]);
    }

    public function submitFiche($id, Request $request){
      if($id == FicheTuteurEnsController::$ID_FICHE_APPARIEMENT){
        return $this->traitementSubmitAppariement($id, $request);
      }

      return "Error.";
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

}
