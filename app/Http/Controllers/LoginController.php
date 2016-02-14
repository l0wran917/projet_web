<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\SignupEntrepriseRequest;

use App\Etudiant;
use App\Constante;
use App\Utilisateur;
use App\TuteurEnseignant;
use App\Tuteur;

use Hash;
use Redirect;
use Validator;

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

    public function signupEtape($id){
        if(session()->has('cleSignUp')){
          return view('signup.signup')->with('etape', $id);
        }else{
          return redirect()->route('signup');
        }
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
        if($id == 1){ // Validation cle
          return $this->validationCle($request->CleSecrete);
        }else if($id == 4){
          if(session('cleSignUp') == 4){
            $this->validate($request, SignupEntrepriseRequest::rules());
          }else {
            echo 'Erreur, request non autorisé';
          }
        }else{
           echo "Erreur de numero d'etape";
        }

    //   }else if($id == 2){
    //     if(session()->has('cleSignUp')){
    //
    //       $utilisateur = Utilisateur::make($request->all(), Utilisateur::$ETUDIANT);
    //       $etudiant = Etudiant::make($utilisateur, $request->all());
    //
    //       session()->flash('signup', 'done');
    //       session()->forget('cleSignUp');
    //
    //       return redirect()->route('login');
    //     }else{
    //       return "Error signup.";
    //     }
    //   }else if($id == 3){
    //     if(session()->has('cleSignUp')){
    //
    //       $utilisateur = Utilisateur::make($request->all(), Utilisateur::$TUTEUR_ENSEIGNANT);
    //       $enseignant = TuteurEnseignant::make($utilisateur, $request->all());
    //
    //       session()->flash('signup', 'done');
    //       session()->forget('cleSignUp');
    //
    //
    //       return redirect()->route('login');
    //     }else{
    //       return "Error.";
    //     }
    //   }else if($id == 4){
    //     if(session()->has('cleSignUp')){
    //
    //       $this->validate($request, SignupEntrepriseRequest::rules());
    //
    //       $utilisateur = Utilisateur::make($request->all(), Utilisateur::$TUTEUR_ENTREPRISE);
    //       $tuteurEntre = Tuteur::make($utilisateur, $request->all());
    //
    //       session()->flash('signup', 'done');
    //       session()->forget('cleSignUp');
    //
    //       return redirect()->route('login');
    //     }else{
    //       return "Error signup entreprise.";
    //     }
    //   }

    }

    public function validationCle($cleSecrete){
        if(Hash::check($cleSecrete, Constante::getPwdSignupEtudiant())){
          session(['cleSignUp' => '2']);
          return redirect()->route('signupEtape', ['etape' => '2']);
        }else if(Hash::check($cleSecrete, Constante::getPwdSignupEnseignant())){
          session(['cleSignUp' => '3']);
          return redirect()->route('signupEtape', ['etape' => '3']);
        }else if(Hash::check($cleSecrete, Constante::getPwdSignupEntreprise())){
          session(['cleSignUp' => '4']);
          return redirect()->route('signupEtape', ['etape' => '4']);
        }else{
          return redirect()->route('signup')->with('erreurCle', 'erreur cle');
        }
    }

}
