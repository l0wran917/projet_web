<div class="row">
  <form action="{{ route('signupPost', ['etape' => 4] )}}" method="post" class="form-horizontal">
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

    <div class="col-xs-12">

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
          <input type="text" class="form-control" name="nom" id="inputNom" value="" required>
        </div>
        <label for="inputPrenom" class="col-sm-2 control-label">Prenom :</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" name="prenom" id="inputPrenom" value="" required>
        </div>
      </div>

      <div class="form-group">
        <label for="inputEmail" class="col-sm-2 control-label">Email :</label>
        <div class="col-sm-6">
          <input type="email" class="form-control" name="email" id="inputEmail" value="" required>
        </div>
      </div>

      <div class="form-group">
        <label for="inputNom" class="col-sm-2 control-label">Password:</label>
        <div class="col-sm-4">
          <input type="password" class="form-control" name="pwd" id="inputPassword" value="" required>
        </div>
        <label for="inputPrenom" class="col-sm-2 control-label">Confirm:</label>
        <div class="col-sm-4">
          <input type="password" class="form-control" name="pwd" id="inputPasswordConfirm" value="" required>
        </div>
      </div>

      <div class="col-xs-10 col-xs-offset-1">
        <input type="submit" class="form-control btn btn-primary" name="submitEtudiantSignup" value="Valider">
      </div>

    </div>
  </form>
</div>

<script src="{{asset('js/signup.js')}}"></script>
