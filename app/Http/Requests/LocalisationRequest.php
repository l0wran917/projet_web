<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Auth;

class LocalisationRequest extends Request
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
            // 'planAcces' => 'required',
            'civiliteReponsable' => 'required',
            'nomResponsable' => 'required',
            'prenomResponsable' => 'required',
            'telResponsable' => 'required',
            'emailResponsable' => 'required',
            'jourRencontre' => 'required',
            'telEtudiantEntreprise' => 'required',
            'telEtudiantPortable' => 'required',
            'emailEtudiantPerso' => 'required',
            'sujetStage' => 'required'
        ];
    }

    public function messages(){
        return [
          'required' => 'Le champs :attribute est obligatoire'
        ];
    }
}
