<div class="row">
  <form action="{{ route('signupPost', ['etape' => 1] )}}" method="post">
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

    <div class="row">
      <div class="col-xs-12 text-center">
        <p>Veuillez saisir la clé secrète qui vous a été fournie.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-4 col-xs-offset-4">
        <input type="text" class="form-control text-center" name="CleSecrete" value="" placeholder="Ex : AJ34FK9">
      </div>
    </div>
    <div class="row">
      <div class="col-xs-6 col-xs-offset-3">
        <input type="submit" class="form-control btn btn-primary suivant" name="suivantSignup" value="Suivant">
      </div>
    </div>
  </form>

</div>

@if (session('erreurCle'))
  <div class="row">
    <div class="col-xs-10 col-xs-offset-1">
        <div class="alert alert-danger" id="alertSignUp">
            <ul>
                <li>Mauvaise clé d'inscription</li>
            </ul>
        </div>
    </div>
  </div>
@endif
