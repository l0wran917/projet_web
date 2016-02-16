<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\SignupEntrepriseRequest;
use App\Http\Requests\SignupEtudiantRequest;
use App\Http\Requests\SignupEnseignantRequest;

use App\Etudiant;
use App\Constante;
use App\Utilisateur;
use App\TuteurEnseignant;
use App\Tuteur;
use App\Entreprise;

use Hash;
use Redirect;
use Validator;

class LoginController extends Controller
{
    public function login(){
      return view('login');
    }

    public function logout(){

      session()->flush();

      return view('logout');
    }

    public function signup(){
      return view('signup.signup')->with('etape', 1);
    }

    public function signupEtapeCorrespondant($id, $correspondant){
      if(!session()->has('idEntreprise')){
        return view('signup.entrepriseCorrespondante');
      }else if(session()->has('idEntreprise') && !session()->has('idTuteur')){
        return view('signup.tuteurCorrespondant');
      }else{
        return redirect()->route('signup');
      }
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
        // Validation cle
        if($id == 1){
          return $this->validationCle($request->CleSecrete);

        // Inscription etudiant
        }else if($id == 2){
          if(session('cleSignUp') == 2){
            $this->validate($request, SignupEtudiantRequest::rules());

            $utilisateur = Utilisateur::make($request->all(), Utilisateur::$ETUDIANT);
            $etudiant = Etudiant::make($utilisateur, $request->all());

          }else {
            return 'Erreur, request non autorisé';
          }

        // Inscription enseignant
        }else if($id == 3){
          if(session('cleSignUp') == 3){
            $this->validate($request, SignupEnseignantRequest::rules());

            $utilisateur = Utilisateur::make($request->all(), Utilisateur::$TUTEUR_ENSEIGNANT);
            $enseignant = TuteurEnseignant::make($utilisateur, $request->all());
          }else {
            return 'Erreur, request non autorisé';
          }

        // Inscription tuteurEntreprise
        }else if($id == 4){
          if(session('cleSignUp') == 4){
            $this->validate($request, SignupEntrepriseRequest::rules());

            session(['requestSignUp' => $request->all()]);

            $retour = $this->checkEntrepriseInDB($request);
            if($retour){
              // S'il existe une entreprise => Continue le traitement
              return $retour;
            }else{
              // Si aucune entreprise identique => Finalise l'inscription (on a toute les infos)
              return $this->endSignupEntreprise();
            }
          }else {
            return 'Erreur, request non autorisé';
          }

        // ID Url inconnu
        }else{
           return "Erreur de numero d'etape";
        }

      return $this->signupSucceed();
    }

    public function checkEntrepriseInDB($request){
      $entreprises = Entreprise::existeInDBByCP($request->nomEtablissement, $request->codePostalEtablissement);

      if(count($entreprises) > 0){
        session(['entreprises' => $entreprises]);
        return redirect()->route('signupEtapeCorrespondant', ['etape' => '4', 'correspondant' => 'entreprise']);
      }else{
        return null;
      }
    }

    public function checkTuteurInDB(){
      $tuteurs = Tuteur::existeInDBByEntreprise(session('requestSignUp')['nom'], session('idEntreprise'));

      if(count($tuteurs) > 0){
        session(['tuteurs' => $tuteurs]);
        return redirect()->route('signupEtapeCorrespondant', ['etape' => '4', 'correspondant' => 'tuteur']);
      }else{
        return $this->endSignupEntreprise();
      }
    }

    public function postSignupEtapeCorrespondant(Request $request, $id, $correspondant){
      if($correspondant == 'entreprise'){
        // Entreprise deja existante
        if($request->inputCorrespondante != 0){
          session(['idEntreprise' => session('entreprises')[$request->inputCorrespondante-1]->id]);

          return $this->checkTuteurInDB();
        }else{
          return $this->endSignupEntreprise();
        }
      }else if($correspondant == 'tuteur'){
        if($request->inputCorrespondante != 0){
          session(['idTuteur' => session('tuteurs')[$request->inputCorrespondante - 1]->idUtilisateur]);

          return $this->endSignupEntreprise();
        }else{
          return $this->endSignupEntreprise();
        }
      }else{
        return "Error.";
      }
    }

    // Called when all the data needed to register the company employee are collected
    public function endSignupEntreprise(){
      session()->forget('entreprises');
      session()->forget('tuteurs');

      // echo "Entreprise : " . session('idEntreprise') . " | Tuteur : " . session('idTuteur');

      $entreprise = Entreprise::getByID(session('idEntreprise'));
      $utilisateur = Utilisateur::getByID(session('idTuteur'));
      $tuteur = Tuteur::getByID(session('idTuteur'));

      if($entreprise == null){
        $entreprise = Entreprise::make(session('requestSignUp'));
        session(['idEntreprise' => $entreprise->id]);
      }

      if($utilisateur != null){
        if($utilisateur->isActive()){ // Utilisateur deja inscrit
          // Signup forbidden
          session()->flash('userActive', 'utilisateur deja inscrit');
          return redirect()->route('signup');
        }else{
          // Signup allowed
          $utilisateur->setPassword(session('requestSignUp')['pwd']);
        }
      }else{
        $utilisateur = Utilisateur::make(session('requestSignUp'), Utilisateur::$TUTEUR_ENTREPRISE);
        $tuteur = Tuteur::make($utilisateur, ['idEntreprise' => session('idEntreprise')]);
      }

      // dd([$entreprise, $utilisateur, $tuteur]);

      //// Si entreprise n'existe pas => Insert entreprise
      //// Si tuteur existe mais possede un mdp => Refuse inscription
      //// Si tuteur existe mais ne possede pas de mdp => Update l'utilisateur (Entreprise existe deja et lien est fait)
      //// Si tuteur n'existe pas => Insert tuteur + utilisateur

      return $this->signupSucceed();
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

    public function signupSucceed(){
      session()->flash('signup', 'done');
      session()->forget('cleSignUp');
      return redirect()->route('login');
    }

}
