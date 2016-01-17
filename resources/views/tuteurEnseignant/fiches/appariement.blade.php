<div class="row">
  <div class="col-xs-12">
    <div class="page-header">
      <h1>Demande d'appariement</h1>
    </div>
  </div>
</div>

{{dd($data)}}
<div class="row">
  <div class="col-lg-6">
    <div class="panel panel-default">
      <div class="panel-heading">
        Choix de l'étudiant
      </div>
      <div class="panel-body">

        <div class="row">
          <div class="col-xs-12">
            <p class="">
              Choisir un étudiant pour lequel vous souhaitez être le tuteur
            </p>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-12">
            <div class="form-horizontal">
              <div class="form-group">
                <label class="col-xs-2 control-label" for="inputNomEtudiant">Nom: </label>
                <div class="col-xs-7">
                  <select class="form-control" name="idEtudiant" id="inputIdEtudiant">
                    @foreach($data['etudiants'] as $etudiant)
                        <option value="{{ $etudiant->idEtudiant }}">{{ ucfirst($etudiant->nom) }} {{ ucfirst($etudiant->prenom) }}</option>
                    @endforeach
                  </select>
                </div>

                <div class="col-xs-3">
                  <input type="button" class="form-control btn btn-default" id="submitGetDetailsEtudiant" value="Valider" data-route-details="{{ route('detailsEtudiantByEtudiant') }}">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        Mes demandes
      </div>
      <div class="panel-body">
        <p>
          <div class="alert alert-danger" role="alert">
            Vous n'avez aucune demande
          </div>
        </p>
      </div>
    </div>
  </div>

  <div class="col-lg-6">
    <div class="panel panel-default" id="panelEtudiantDetails">
      <div class="panel-heading red">
        <span class="nomEtudiantDetails"></span> <span id="statusStageDetails" class="label"></span>
      </div>
      <div class="panel-body">

        <form class="form-horizontal" method="post">
          <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

          <input type="hidden" name="idEtudiant" id="idEtudiant" value="0">

          <div class="form-group">
            <label class="control-label col-xs-3 text-right">Etudiant :</label>
            <div class="col-xs-6">
              <p class="form-control-static text-left">
                <span class="nomEtudiantDetails"></span>
              </p>
            </div>
          </div>


          <div class="form-group">
            <label class="control-label col-xs-3 text-right">Email :</label>
            <div class="col-xs-6">
              <p class="form-control-static text-left">
                <span class="emailEtudiantDetails"></span>
              </p>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-xs-3 text-right">Entreprise :</label>
            <div class="col-xs-6">
              <p class="form-control-static text-left">
                <span class="entrepriseEtudiantDetails"></span>
              </p>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-xs-3 text-right">Tuteur :</label>
            <div class="col-xs-6">
              <p class="form-control-static text-left">
                <span class="tuteurEntrepriseDetails"></span>
              </p>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-xs-3 text-right">Sujet du stage :</label>
            <div class="col-xs-8">
              <p class="form-control-static text-left text-justify">
                <span class="sujetEtudiantDetails"></span>
              </p>
            </div>
          </div>

          <div class="form-group">
            <div class="col-xs-6 col-xs-offset-3">
              <input type="submit" class="form-control btn btn-success" name="btnStatusStage" data-status=1 value="Je veux cet étudiant !">
            </div>
          </div>

        </form> <!-- Form horizontal -->

      </div>
    </div> <!-- panel -->
  </div>
</div>

<meta name="csrf-token" content="{{ csrf_token() }}" />
<script src="{{asset('js/demandeAppariement.js')}}"></script>
