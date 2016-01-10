<div class="row">

  <div class="col-lg-6">

    <div class="row">
      <div class="col-xs-10">
        <div class="panel panel-default">
          <div class="panel-heading">
            Mes informations
          </div>
          <div class="panel-body">

            <div class="row">
              <div class="col-xs-12">

                <div class="form-horizontal">

                  <div class="form-group">
                    <label class="col-sm-5 control-label text-right">Nom :</label>
                    <div class="col-sm-7">
                      <p class="form-control-static">{{ ucfirst($dashboardInfos['tuteur']->nomTuteur) }} {{ ucfirst($dashboardInfos['tuteur']->prenomTuteur) }} </p>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-5 control-label text-right">Entreprise :</label>
                    <div class="col-sm-7">
                      <p class="form-control-static">{{ $dashboardInfos['tuteur']->nomEntreprise }} </p>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-5 control-label text-right">Télephone :</label>
                    <div class="col-sm-7">
                      <p class="form-control-static">{{ ($dashboardInfos['tuteur']->telPortableTuteur != '') ? $dashboardInfos['tuteur']->telPortableTuteur : $dashboardInfos['tuteur']->telTuteur }}</p>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-5 control-label text-right">Email :</label>
                    <div class="col-sm-7">
                      <p class="form-control-static">{{ $dashboardInfos['tuteur']->emailTuteur }}</p>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-5 control-label text-right">Adresse :</label>
                    <div class="col-sm-7">
                      <p class="form-control-static">{{ $dashboardInfos['tuteur']->rueEntreprise }} </br> {{ $dashboardInfos['tuteur']->codePostalEntreprise }} {{ $dashboardInfos['tuteur']->villeEntreprise }}</p>
                    </div>
                  </div>

                </div>

              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

  </div>

  <div class="col-lg-6">

    <div class="row">
      <div class="col-xs-10">
        <div class="panel panel-default">
          <div class="panel-heading">
            Statistiques
          </div>
          <div class="panel-body">
            <div class="form-horizontal">

              <div class="form-group">
                <label class="col-sm-4 control-label text-left">Nombre de stagiaire :</label>
                <div class="col-sm-7">
                  <p class="form-control-static">{{ $dashboardInfos['nbStagiaire'] }}</p>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-4 control-label text-left">Dont non validés :</label>
                <div class="col-sm-7">
                  <p class="form-control-static">{{ $dashboardInfos['nbStagiaire'] - $dashboardInfos['nbStagiaireValide'] }}</p>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

</div>
