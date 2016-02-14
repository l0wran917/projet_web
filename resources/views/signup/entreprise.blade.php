<div class="row">
  <form action="{{ route('signupPost', ['etape' => 4] )}}" method="post" class="form-horizontal">
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

    <div class="col-xs-12">
      <div class="page-header headerSignUp">
        <h2>Vous</h2>
      </div>
      <div class="form-group">
        <label for="inputCivilite" class="col-sm-2 control-label">Civilité :</label>
        <div class="col-sm-3">
          <select class="form-control" name="civilite" id="inputCivilite">
            <option value="1">Mr</option>
            <option value="2">Mme</option>
          </select>
        </div>
      </div>

      <div class="form-group">
        <label for="inputNom" class="col-sm-2 control-label">Nom :</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" name="nom" id="inputNom" value="{{ old('nom') }}" required>
        </div>
        <label for="inputPrenom" class="col-sm-2 control-label">Prenom :</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" name="prenom" id="inputPrenom" value="{{ old('prenom') }}" required>
        </div>
      </div>

      <div class="form-group">
        <label for="inputEmail" class="col-sm-2 control-label">Email :</label>
        <div class="col-sm-6">
          <input type="email" class="form-control" name="email" id="inputEmail" value="{{ old('email') }}"  required><!--pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" -->
        </div>
      </div>

      <div class="form-group">
        <label for="inputNom" class="col-sm-2 control-label">Password:</label>
        <div class="col-sm-4">
          <input type="password" class="form-control" name="pwd" id="inputPassword" value="{{ old('pwd') }}" required>
        </div>
        <label for="inputPrenom" class="col-sm-2 control-label">Confirm:</label>
        <div class="col-sm-4">
          <input type="password" class="form-control" name="pwd_confirmation" id="inputPasswordConfirm" value="{{ old('pwd_confirmation') }}" required>
        </div>
      </div>

    </div>

    <div class="col-xs-12">
      <div class="page-header headerSignUp">
        <h2>Votre Entreprise</h2>
      </div>

      <div class="form-group">
        <label for="inputNomEtablissement" class="col-sm-2 control-label">Nom :</label>
        <div class="col-sm-5">
          <input type="text" class="form-control" name="nomEtablissement" id="inputNomEtablissement" value="{{ old('nomEtablissement') }}" required>
        </div>
      </div>

      <div class="form-group">
        <label for="inputRueEtablissement" class="col-sm-2 control-label">Rue :</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="rueEtablissement" id="inputRueEtablissement" value="{{ old('rueEtablissement') }}" required>
        </div>
      </div>
      <div class="form-group">
        <label for="inputVilleEtablissement" class="col-sm-2 control-label">Ville:</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" name="villeEtablissement" id="inputVilleEtablissement" value="{{ old('villeEtablissement') }}" required>
        </div>
        <label for="inputCodePostalEtablissement" class="col-sm-3 control-label">Code Postal:</label>
        <div class="col-sm-3">
          <input type="text" class="form-control" name="codePostalEtablissement" id="inputCodePostalEtablissement" value="{{ old('codePostalEtablissement') }}" pattern="[0-9]{5}" required>
        </div>
      </div>
    </div>

    <div class="form-group">
      <div class="col-xs-10 col-xs-offset-1">
        <input type="submit" class="form-control btn btn-primary" name="submitEtudiantSignup" value="Valider">
      </div>
    </div>


    @if (count($errors) > 0)
    <div class="col-xs-10 col-xs-offset-1">
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    </div>
    @endif
  </form>
</div>

<script src="{{asset('js/signup.js')}}"></script>
