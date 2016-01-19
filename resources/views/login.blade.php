<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link type="text/css" rel="stylesheet" href="{{asset('style/bootstrap.min.css')}}">
        <link type="text/css" rel="stylesheet" href="{{asset('style/desktop.css')}}">
        <script src="{{asset('js/jquery/jquery.1.11.3.min.js')}}"></script>
        <script src="{{asset('js/bootstrap/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/login.js')}}"></script>

    </head>
    <body>


          <div class="container">
            <div class="row">
              <div class="col-xs-10 col-xs-offset-1 text-center">
                <h1>Gestion des stages</h1>
                <h3>Université Paris Sud</h3>
              </div>
            </div>
            <div class="row" >
              <div class="col-md-6 col-md-offset-3 login">

                <div class="panel panel-default">
                  <div class="panel-heading text-center">
                    DUT Informatique
                  </div>
                  <div class="panel-body">

                    <div class="iconPrevious">
                      <span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>
                    </div>

                    <div class="personalPicture">
                      <img src="img/testImg.png" alt="" />
                    </div>

                    <div class="row">
                      <div class="col-xs-6 col-xs-offset-3 infoUser">
                          <span class="prenom"></span></br>
                          <span class="nom"></span>
                      </div>
                    </div>

                    <form class="" action="{{ route('loginPost') }}" method="post">
                      <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                      <div class="first-panel">
                        <div class="row">
                          <div class="col-xs-10 col-xs-offset-1">
                            <input type="text" class="form-control input-lg" name="inputEmail" id="inputEmail" value="" placeholder="prenom.nom@u-psud.fr" autofocus>
                            <div class="panel-alert transparent">
                              <div class="alert alert-danger" role="alert">
                                Humm, there is something wrong
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-xs-8 col-xs-offset-2">
                            <input type="button" class="form-control btn btn-primary btn-block" id="nextLogin" value="Suivant" >
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-xs-8 col-xs-offset-2 text-center labelInscription">
                            <small><a href="{{ route('signup') }}">Pas de compte ? Inscrivez vous !</a></small>
                          </div>
                        </div>
                      </div>

                      <div class="second-panel">
                        <div class="row">
                          <div class="col-xs-10 col-xs-offset-1">
                            <input type="password" class="form-control input-lg" name="inputPassword" id="inputPassword" value="" placeholder="***********">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-xs-8 col-xs-offset-2">
                            <input type="button" class="form-control btn btn-primary btn-block" id="submitLogin" value="Valider" >
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </body>
</html>
