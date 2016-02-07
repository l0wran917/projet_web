<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\LoginRequest;

use App\Etudiant;
use App\Constante;
use App\Utilisateur;
use App\TuteurEnseignant;
use App\Tuteur;

use Hash;
use Redirect;

class LoginController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function signup()
    {
        return view('signup.signup')->with('etape', 1);
    }

    public function submitLogin(LoginRequest $request){

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

          session()->flash('wrongPwd', 'Mot de passe érroné.');
          return redirect()->route('login');
        }
      } else {
        // L'utilisateur n'existe pas
        session()->flush();

        session()->flash('wrongPwd', 'Mot de passe érroné.');
        return redirect()->route('login');
      }

      return "Error.";
    }

    public function submitSignup(Request $request, $id)
    {
      // Valide la clé + Affiche form suivant
      if($id == 1){
        if(Hash::check($request->CleSecrete, Constante::getPwdSignupEtudiant())){
          session(['cleSignUp' => 'etudiant']);

          return view('signup.signup')->with('etape', 2);
        }else if(Hash::check($request->CleSecrete, Constante::getPwdSignupEnseignant())){
          session(['cleSignUp' => 'enseignant']);

          return view('signup.signup')->with('etape', 3);
        }else if(Hash::check($request->CleSecrete, Constante::getPwdSignupEntreprise())){
          session(['cleSignUp' => 'entreprise']);

          return view('signup.signup')->with('etape', 4);
        }else{
          session()->flash('cleError', 'Clé fausse');

          return redirect()->route('signup');
        }
      // Valide le form
      }else if($id == 2){
        if(session()->has('cleSignUp')){

          $utilisateur = Utilisateur::make($request->all(), Utilisateur::$ETUDIANT);
          $etudiant = Etudiant::make($utilisateur, $request->all());

          session()->flash('signup', 'done');
          session()->forget('cleSignUp');

          return redirect()->route('login');
        }else{
          return "Error.";
        }
      }else if($id == 3){
        if(session()->has('cleSignUp')){

          $utilisateur = Utilisateur::make($request->all(), Utilisateur::$TUTEUR_ENSEIGNANT);
          $enseignant = TuteurEnseignant::make($utilisateur, $request->all());

          session()->flash('signup', 'done');
          session()->forget('cleSignUp');


          return redirect()->route('login');
        }else{
          return "Error.";
        }
      }else if($id == 4){
        if(session()->has('cleSignUp')){

          $utilisateur = Utilisateur::make($request->all(), Utilisateur::$TUTEUR_ENTREPRISE);
          $tuteurEntre = Tuteur::make($utilisateur, $request->all());

          session()->flash('signup', 'done');
          session()->forget('cleSignUp');


          return redirect()->route('login');
        }else{
          return "Error.";
        }
      }

    }

}
