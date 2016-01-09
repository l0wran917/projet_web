<div class="row">
  <div class="col-lg-12">
    <div class="page-header">
      <h1>Mes Stagiaires</h1>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-lg-5">

    <div class="panel panel-default">
      <div class="panel-heading">
        Choix de l'étudiant
      </div>
      <div class="panel-body">
        <div class="form-horizontal col-xs-12">
          <div class="form-group">
            <label class="col-xs-2 control-label" for="inputNomStagiaire">Nom: </label>

            <div class="col-xs-7">
              <select class="form-control" name="nomStagiaire" id="inputNomStagiaire">
                @foreach($data['stages'] as $stage)
                  <option value="{{ $stage->idEtudiant }}">{{ ucfirst($stage->nomEtudiant) }} {{ ucfirst($stage->prenomEtudiant) }} - En attente</option>
                @endforeach
                <!-- <option value="1">Bassin Laurent - 1K</option>
                <option value="2">Yeboubouam Boukari - 1F</option> -->
              </select>
            </div>

            <div class="col-xs-3">
              <input type="button" class="form-control btn btn-default" id="submitStagiaireList" value="Valider">
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

</div>

<div class="row">
  <div class="col-lg-6">
    <div class="panel panel-default">
      <div class="panel-heading red">
        Bassin Laurent <span class="label label-warning">En attente</span>
      </div>
      <div class="panel-body">

        <div class="form-horizontal">

          <div class="form-group">
            <label class="control-label col-xs-3 text-right">Nom :</label>
            <div class="col-xs-6">
              <p class="form-control-static text-left">
                Bassin Laurent
              </p>
            </div>
          </div>


          <div class="form-group">
            <label class="control-label col-xs-3 text-right">Email :</label>
            <div class="col-xs-6">
              <p class="form-control-static text-left">
                laurent.bassin@u-psud.fr
              </p>
            </div>
          </div>


          <div class="form-group">
            <label class="control-label col-xs-3 text-right">Sujet du stage :</label>
            <div class="col-xs-8">
              <p class="form-control-static text-left text-justify">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
            </div>
          </div>

          <div class="form-group">
            <div class="col-xs-6">
              <input type="button" class="form-control btn btn-success" name="name" value="Cet étudiant est bien mon stagiaire">
            </div>
            <div class="col-xs-6">
              <input type="button" class="form-control btn btn-danger" name="name" value="Je ne connais pas cet étudiant">
            </div>
          </div>

        </div> <!-- Form horizontal -->

      </div>
    </div> <!-- panel -->
  </div>

  <!-- <div class="col-lg-offset-1 col-lg-4">
    <div class="panel panel-default">
      <div class="panel-heading">
        Liste des mes stagiaires
      </div>
      <div class="panel-body">
        <table class="table text-center">
          <thead>
            <td>Nom</td>
            <td>Prenom</td>
            <td>Status</td>
          </thead>
          <tr class="warning">
            <td>Bassin </td>
            <td>Laurent </td>
            <td>En attente </td>
          </tr>
          <tr class="success">
            <td>Boukari </td>
            <td>Yedoubouam </td>
            <td>Validé </td>
          </tr>

        </table>
      </div>
    </div>
  </div> -->

</div>

<meta name="csrf-token" content="{{ csrf_token() }}" />
<script src="{{asset('js/stagiairesTuteurEntr.js')}}"></script>
