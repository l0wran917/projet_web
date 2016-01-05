<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Auth;

class avisEtudiantRequest extends Request
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
      }
      else{
        return false;
      }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'remunerationStage' => 'required',
            //'montantRemuneration' => 'required',
            'encadrageInfomaticien' => 'required',
            'appelInformaticien' => 'required',
            'travailSeul' => 'required',
            'typeMateriel' => 'required',
            'typeSysteme[]' => 'required',
            'objetStage[]' => 'required'
          ];
    }
}
