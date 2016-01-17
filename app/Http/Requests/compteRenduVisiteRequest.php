<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class compteRenduVisiteRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if(Auth::check()){
          return true;
        }else{
          return false;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public static function rules()
    {
        return [
            'nomEtablissement' => 'required',
            'adresseEtablissement' => 'required',
            'villeEtablissement' => 'required',
            'cpEtablissement' => 'required',
            'deplacementEnseignant' => 'required',
            'dateDeplacementEnseignant' => 'required',
            'nomResponsable' => 'required',
            'prenomResponsable' => 'required',
            'fonctionResponsable' => 'required',
            'nomRH' => 'required',
            'emailRH' => 'required',
            'telRH' => 'required',
            'encadrageInformaticien' => 'required',
            'travailSeul' => 'required',
            'tailleEquipe' => 'required',
            'objetStage' => 'required',
            'niveauTravail' => 'required',
            'formationManquante' => 'required',
            'avisEnseignant' => 'required',
            'precautionStage' => 'required',
        ];
    }
}
