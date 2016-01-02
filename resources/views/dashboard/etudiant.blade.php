<div class="row">

  <div class="col-lg-5">
    <div class="panel panel-default">
      <div class="panel-heading">Récapitulif sur l'étudiant</div>
      <div class="panel-body recapitulatif">
        <form class="form-horizontal">

          <div class="form-group">
            <label class="col-sm-5 control-label">TP :</label>
            <div class="col-sm-7">
              <p class="form-control-static">{{ $dashboardInfos['etudiant']->tp or 'null' }}</p>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-5 control-label">Etudiant :</label>
            <div class="col-sm-7">
              <p class="form-control-static">{{ ucfirst($dashboardInfos['etudiant']->nom) }} {{ ucfirst($dashboardInfos['etudiant']->prenom) }}</p>
            </div>
          </div>


          <div class="form-group">
            <label class="col-sm-5 control-label">Adresse personnelle :</label>
            <div class="col-sm-7">
              <p class="form-control-static">{{ $dashboardInfos['etudiant']->adresse}}</p>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-5 control-label">Courriel IUT :</label>
            <div class="col-sm-7">
              <p class="form-control-static">{{ $dashboardInfos['etudiant']->email }}</p>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-5 control-label">Telephone :</label>
            <div class="col-sm-7">
              <p class="form-control-static">{{ $dashboardInfos['etudiant']->telPortable}}</p>
            </div>
          </div>

        </form>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">Récapitulif sur l'entreprise</div>
      <div class="panel-body recapitulatif">
        <form class="form-horizontal">

          <div class="form-group">
            <label class="col-sm-5 control-label">Nom :</label>
            <div class="col-sm-7">
              <p class="form-control-static">{{ $dashboardInfos['stage']->nomEntreprise }}</p>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-5 control-label">Responsable :</label>
            <div class="col-sm-7">
              <p class="form-control-static">{{ $dashboardInfos['stage']->nomTuteur }} {{ $dashboardInfos['stage']->prenomTuteur }} </p>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-5 control-label">Télephone :</label>
            <div class="col-sm-7">
              <p class="form-control-static">{{ ($dashboardInfos['stage']->telPortableTuteur != '') ? $dashboardInfos['stage']->telPortableTuteur : $dashboardInfos['stage']->telTuteur }}</p>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-5 control-label">Email :</label>
            <div class="col-sm-7">
              <p class="form-control-static">{{ $dashboardInfos['stage']->emailTuteur }}</p>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-5 control-label">Adresse :</label>
            <div class="col-sm-7">
              <p class="form-control-static">{{ $dashboardInfos['stage']->rueEntreprise }} </br> {{ $dashboardInfos['stage']->codePostalEntreprise }} {{ $dashboardInfos['stage']->villeEntreprise }}</p>
            </div>
          </div>

        </form>
      </div>
    </div>

  </div>

  <div class="col-lg-5 col-lg-offset-1">
    <div class="panel panel-default">
      <div class="panel-heading text-center">Temps avant la soutenance</div>
      <div class="panel-body text-center">
        235 Jours 2 Heures 35 Minutes 27 Secondes
      </div>
    </div>
  </div>

</div>
