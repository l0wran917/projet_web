<!DOCTYPE html>
<html>
    <head>
        <title>Dashboard</title>

        <link type="text/css" rel="stylesheet" href="{{asset('style/bootstrap.min.css')}}">
        <link type="text/css" rel="stylesheet" href="{{asset('style/dashboard.css')}}">
        <script src="{{asset('js/jquery/jquery.1.11.3.min.js')}}"></script>
        <script src="{{asset('js/bootstrap/bootstrap.min.js')}}"></script>

        <script src="{{asset('js/dashboard.js')}}"></script>

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
                Dashboard
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


            <div class="footer">
              <div class="row" id="zoneProgressBarTotal">
                <div class="col-xs-8 col-xs-offset-2" >
                <div class="col-xs-8 col-xs-offset-2" >
                  <div class='box' id="progressBarTotal">
                  	<div class='content'>
                      <!-- Progress Bar SVG -->
                      <div id="cont" data-pct="0">
                        <svg id="svg" viewBox="0 0 200 200" preserveAspectRatio="xMinYMin slice" version="1.1" xmlns="http://www.w3.org/2000/svg">

                          <text id="perc" x="60" y="115" fill="currentColor" stroke="transparent" font-size="50">0%</text>
                          <circle r="90" cx="100" cy="100" fill="transparent" stroke-dasharray="565.48" stroke-dashoffset="0"></circle>
                          <circle id="bar" r="90" cx="100" cy="100" fill="transparent" stroke-dasharray="565.48" stroke-dashoffset="0" transform="rotate(-90 100 100)"></circle>
                        </svg>
                      </div>
                      <!--  -->
                    </div>
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
