@include('template.head')
<link type="text/css" rel="stylesheet" href="{{asset('style/choixEtudiant.css')}}">

  <div class="row">
    <div class="col-xs-12">
      <div class="page-header">
        <h1>Choix du stagiaire</h1>
      </div>
    </div>
  </div>

  <div class="row">
    <!-- <div class="col-lg-6 col-lg-offset-3"> -->
    <div class="col-lg-5">
      <form class="" action="" method="post">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

        <div class="panel panel-default">
          <div class="panel-heading">
            Choix de l'étudiant
          </div>
          <div class="panel-body">
            <div class="form-horizontal col-xs-12">
              <p>
                Plusieurs étudiants sont rattrachés à votre compte.</br>Veuillez choisir l'étudiant pour lequel vous allez saisir des informations.
              </p>
              <div class="form-group">
                <label class="col-xs-2 control-label" for="inputNomStagiaire">Nom: </label>

                <div class="col-xs-7">
                  <select class="form-control" name="idStagiaire" id="inputIdStagiaire">
                    @foreach($stages as $stage)
                      <option value="{{ $stage->idEtudiant }}">{{ ucfirst($stage->nomEtudiant) }} {{ ucfirst($stage->prenomEtudiant) }}</option>
                    @endforeach
                    <!-- <option value="1">Bassin Laurent - 1K</option>
                    <option value="2">Yeboubouam Boukari - 1F</option> -->
                  </select>
                </div>

                <div class="col-xs-3">
                  <input type="submit" class="form-control btn btn-default" id="submitStagiaireList" value="Valider">
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>

    </div>

  </div>


@include('template.foot')
