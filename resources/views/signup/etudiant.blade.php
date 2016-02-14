<div class="row">
  <form action="{{ route('signupPost', ['etape' => 2] )}}" method="post" class="form-horizontal">
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

    <div class="col-xs-12">

      <div class="form-group">
        <label for="inputCivilite" class="col-sm-2 control-label">Civilité :</label>
        <div class="col-sm-3">
          <select class="form-control" name="civilite" id="inputCivilite">
            <option value="1"
              @if(old('civilite') == '1')
                selected
              @endif
            >Mr</option>
            <option value="2"
              @if(old('civilite') == '2')
                selected
              @endif
            >Mme</option>
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
          <input type="email" class="form-control" name="email" id="inputEmail" value="{{ old('email') }}" pattern="[a-z0-9._%+-]+\.[a-z0-9._%+-]+@u-psud\.fr" required>
        </div>
        <label class="control-label col-xs-4" style="text-align:left !important;"><small>(u-psud uniquement)</small></label>
      </div>

      <div class="form-group">
        <label for="inputTel" class="col-sm-2 control-label">Tel :</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" name="tel" id="inputTel" value="{{ old('tel') }}" pattern="^0[1-8]([-. ]?[0-9]{2}){4}$">
        </div>
        <label class="control-label col-xs-4" style="text-align:left !important;"><small>(facultatif)</small></label>
      </div>

      <div class="form-group">
        <label for="inputTelPort" class="col-sm-2 control-label">Tel Port :</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" name="telPort" id="inputTelPort" value="{{ old('telPort') }}" pattern="^0(6|7)([-. ]?[0-9]{2}){4}$" required>
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

      <div class="form-group">
        <label for="inputTP" class="col-sm-2 control-label">TP :</label>
        <div class="col-sm-3">
          <input type="text" class="form-control" name="tp" id="inputTP" value="{{ old('tp') }}" placeholder="Ex : 1K" required>
        </div>
      </div>

      <div class="col-xs-10 col-xs-offset-1">
        <input type="submit" class="form-control btn btn-primary" name="submitEtudiantSignup" value="Valider">
      </div>

    </div>
  </form>
</div>
<div class="row">
  <div class="col-xs-10 col-xs-offset-1">
    @if (count($errors) > 0)
      <div class="alert alert-danger" id="alertSignUp">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
    @endif
  </div>
</div>

<script src="{{asset('js/signup.js')}}"></script>
