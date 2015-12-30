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
          <div class="col-xs-3" id="dashboard-menu">

            <!-- Info utilisateur -->
            <div class="row" id="infoUser">
                <div class="col-lg-5" id="personalPicture">
                  <div class="image" style="background-image: url('img/etudiants/{{ session('prenom') }}.{{ session('nom') }}.jpg');">
                  </div>
                  <!-- <img src="img/etudiants/laurent.bassin.jpg" alt="Photo de l'etudiant" /> -->
                  <!-- <img src="http://lorempixel.com/120/120" alt="Photo de l'etudiant" /> -->
                </div>
                <div class="col-lg-7 details">
                  <p>
                    <span class="nomPrenom">{{ ucfirst(session('nom')) }} {{ ucfirst(session('prenom')) }}</span>
                    <span class="email">{{ session('email') }}</span>
                  </p>
                </div>
            </div>

            <!--  Bouton du menu -->
            <div class="row btn-menu">
              <div class="col-xs-12">
                DASHBOARD
              </div>
            </div>

            <div class="row btn-menu">
              <div class="col-xs-12">
                Document 1
              </div>
            </div>

            <div class="row btn-menu">
              <div class="col-xs-12">
                Document 2
              </div>
            </div>

            <div class="row btn-menu">
              <div class="col-xs-12">
                Document 3
              </div>
            </div>

            <div class="row btn-menu">
              <div class="col-xs-12">
                Document 4
              </div>
            </div>

            <div class="row">
              <div class="col-xs-8 col-xs-offset-2 text-center">
                <div class="col-xs-8 col-xs-offset-2" id="progressBarTotal">
                  <div class="background">
                    <div class="status">
                      80 % Completed
                    </div>
                  </div>
                </div>
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
