<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\LocalisationRequest;
use App\Http\Controllers\Controller;

class FicheEtudiantController extends Controller
{
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

        return $request->input();
    }

}
