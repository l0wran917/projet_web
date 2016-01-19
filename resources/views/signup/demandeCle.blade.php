<form class="{{ route('signupPost', ['etape' => 2] )}}" action="index.html" method="post">
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
      <input type="submit" class="form-control btn btn-primary" name="suivantSignup" value="Suivant">
    </div>
  </div>
</form>
