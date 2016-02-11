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
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|email',
            'pwd' => 'required',
            'pwd_confirmation' => 'required'
        ];
    }
}
