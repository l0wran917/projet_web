<div class="row">
  <div class="col-lg-12">
    <div class="page-header">
      <h1>Contre-Rendu de Visite de Stage</h1>
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
                  <option value="{{ $stage->idEtudiant }}">{{ ucfirst($stage->nomEtudiant) }} {{ ucfirst($stage->prenomEtudiant) }} - {{ $stage->tuteurValide == 0 ? 'En attente' : 'Validé' }} </option>
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
