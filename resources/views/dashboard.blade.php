<!DOCTYPE html>
<html>
    <head>
        <title>Dashboard</title>

        <link type="text/css" rel="stylesheet" href="{{asset('style/bootstrap.min.css')}}">
        <link type="text/css" rel="stylesheet" href="{{asset('style/dashboard.css')}}">
        <script src="{{asset('js/jquery/jquery.1.11.3.min.js')}}"></script>
        <script src="{{asset('js/bootstrap/bootstrap.min.js')}}"></script>

    </head>
    <body>
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-3 dashboard-menu">
            <div class="row" id="infoUser">
                <div class="col-xs-4" id="personalPicture">
                  <div class="image">

                  </div>
                  <!-- <img src="img/etudiants/laurent.bassin.jpg" alt="Photo de l'etudiant" /> -->
                  <!-- <img src="http://lorempixel.com/120/120" alt="Photo de l'etudiant" /> -->
                </div>
                <div class="col-xs-8 details">
                  <b>Bassin Laurent</b></br>
                  laurent.bassin@u-psud.fr
                </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-9 col-xs-offset-3" id="panel">
            <!-- -->
          </div>
        </div>
      </div>
    </body>
</html>
