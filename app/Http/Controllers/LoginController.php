<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\LoginRequest;

use App\Utilisateur;
use Hash;
use Redirect;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login');
    }

    public function login(LoginRequest $request){

      $user = Utilisateur::where('email', $request->input('inputEmail'))->first();

      if(count($user) == 1){
        if(Hash::check($request->input('inputPassword'), $user->password)){
          session(['uid' => $user->id]);
          session(['prenom' => $user->prenom]);
          session(['nom' => $user->nom]);
          session(['email' => $user->email]);
          session(['typeUtilisateur' => $user->type]); // Changer le type en fonction de l'Utilisateur (Etudiant, prof, ...)


          return Redirect::route('dashboard');
        }else{
          session()->flush();
          return "Nope little boy";
        }
      }

      return "Error.";
    }

    public function test()
    {
        return view('login');
    }

}
