<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\LocalisationRequest;
use App\Http\Controllers\Controller;

use App\Entreprise;

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

    public function post($id = 0, LocalisationRequest $request)
    {
        if($id == FicheEtudiantController::$ID_FICHE_LOCALISATION){
          $entreprisesIdentique = $this->entrepriseExisteInDB($request);

          if(count($entreprisesIdentique) > 0){

            foreach ($entreprisesIdentique as $entreprise) {
              echo $entreprise->nom . '</br>';
            }

            return 'Entreprise identique potentielle trouvée';
          }else{
            $entreprise = new Entreprise;

            $entreprise->nom = $request->input('nomEtablissement');
            $entreprise->rue = $request->input('adresseEtablissement');
            $entreprise->cp = $request->input('cpEtablissement');
            $entreprise->ville = $request->input('villeEtablissement');

            $entreprise->save();

            echo $request->input('nomEtablissement');
          }
        }

        return view('test');
        return $request->input();
    }


    private function entrepriseExisteInDB($request){
      $entreprisesIdentique = [];

      $entreprises = Entreprise::where('cp', $request->input('cpEtablissement'))->get();//->whereRaw('upper(nom) SOUNDEX upper(?)', [$request->input('nomEtablissement')]);

      foreach ($entreprises as $entreprise) {
        if(soundex($request->input('nomEtablissement')) == soundex($entreprise->nom)){
          array_push($entreprisesIdentique, $entreprise);
        }
      }

      return $entreprisesIdentique;
    }
}
