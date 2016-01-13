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
    public static function rules()
    {
        return [
            'remunerationStage' => 'required',
            'montantRemuneration' => 'numeric',
            'encadrageInformaticien' => 'required',
            // appelInformaticien required => Check en back end
            'travailSeul' => 'required',
            // tailleEquipe required => Check en back end
            'typeMateriel' => 'required',
            // typeMaterielAutreDetails required => Check en back end
            'typeSysteme' => 'required',
            // autreSysteme required => Check en back end
            'objetStage' => 'required',
            // autreSysteme required => Check en back end
            'satisactionStage' => 'required',
            // pourquoiCondition required => Check en back end
            'objectifsAtteints' => 'required',
            // objectifsAtteintsPourquoi required => Check en back end
            'satisactionCours' => 'required',
            // matiereDeveloppePrecision required => Check en back end
            'apportStage' => 'required',
          ];
    }
}
