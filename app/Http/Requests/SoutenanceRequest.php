<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class SoutenanceRequest extends Request
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
            'creneaux0' => 'required',
            'creneaux1' => 'required'
        ];
    }
}
