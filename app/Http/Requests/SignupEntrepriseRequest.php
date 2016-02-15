<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class SignupEntrepriseRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    static public function rules()
    {
        return [
            'civilite' => 'required',
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|email', //|unique:utilisateur,email
            'pwd' => 'required|confirmed',
            'nomEtablissement' => 'required',
            'rueEtablissement' => 'required',
            'villeEtablissement' => 'required',
            'codePostalEtablissement' => 'required'
        ];
    }
}
