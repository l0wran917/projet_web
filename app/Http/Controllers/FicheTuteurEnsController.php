<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Etudiant;
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

      $etudiant = Etudiant::where('idUtilisateur', $request->idEtudiant)->select('idUtilisateur')->first();

      if(count($etudiant) == 0){
        return "Error. Cet etudiant n'existe pas";
      }

      $demande = DemandeAppariement::where('idEnseignant', session('uid'))->where('idEtudiant', $request->idEtudiant)->first();
      if(count($demande) == 0){
        $demande = new DemandeAppariement;
        $demande->idEnseignant = session('uid');
        $demande->idEtudiant = $request->idEtudiant;
        $demande->save();
      }


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
