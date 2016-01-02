<div class="row">
  <form class="" action="" method="post">
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
    <div class="col-lg-6">
      <div class="page-header">
        <h1>Entreprise</h1>
      </div>
      <div class="entreprise">

        <div class="row">
          <div class="form-group col-lg-6">
            <label for="inputNomEtablissement">Nom de l'établissement :</label>
            <input type="text" name="nomEtablissement" id="inputNomEtablissement" value="{{ old('nomEtablissement') }}" class="form-control" required>
          </div>
        </div>

        <div class="" style="margin:1%;"> </div>

        <h3>Adresse de l'établissement</h3>
        <div class="form-decalage-group">
          <div class="row">
            <div class="form-group col-lg-6">
              <label for="inputAdresseEtablissement">Numéro et nom de rue :</label>
              <input type="text" name="adresseEtablissement" id="inputAdresseEtablissement" value="{{ old('adresseEtablissement') }}" class="form-control" required>
            </div>
          </div>

          <div class="row">
            <div class="form-group col-lg-6">
              <label for="inputVilleEtablissement">Ville de l'établissement :</label>
              <input type="text" name="villeEtablissement" id="inputVilleEtablissement" value="{{ old('villeEtablissement') }}" class="form-control" required>
            </div>
            <div class="form-group col-lg-2">
              <label for="inputCPEtablissement">Code postal :</label>
              <input type="text" name="cpEtablissement" id="inputCPEtablissement" value="{{ old('cpEtablissement') }}" class="form-control" required pattern="[0-9]{5}">
            </div>
          </div>

          <div class="row ">
              <div class="form-group col-lg-8">
                <label for="inputPlanAcces">Plan d'accès</label>
                <input type="file" name="planAcces" id="inputPlanAcces">
              </div>
          </div>
        </div>

        <h3>Responsable</h3>
        <div class="form-decalage-group">
          <div class="row">
            <div class="form-group col-lg-2">
              <label for="inputCiviliteResponsable">Civilité :</label>
              <select class="form-control" name="civiliteReponsable" id="inputCiviliteResponsable">
                <option value="mr">Mr</option>
                <option value="mme">Mme</option>
              </select>
            </div>
            <div class="form-group col-lg-4 ">
              <label for="inputNomResponsable">Nom : </label>
              <input type="text" name="nomResponsable" id="inputNomResponsable" value="{{ old('nomResponsable') }}" class="form-control" required>
            </div>
            <div class="form-group col-lg-4 ">
              <label for="inputNomResponsable">Prénom : </label>
              <input type="text" name="prenomResponsable" id="inputPrenomResponsable" value="{{ old('prenomResponsable') }}" class="form-control" required>
            </div>
          </div>

          <div class="row">
            <div class="form-group col-lg-6">
              <label for="inputTelResponsable">Numéro de télephone :</label>
              <input type="text" name="telResponsable" id="inputTelResponsable" value="{{ old('telResponsable') }}" class="form-control" required pattern="^0[1-8]([-. ]?[0-9]{2}){4}$">
            </div>
          </div>

          <div class="row">
            <div class="form-group col-lg-6">
              <label for="inputEmailResponsable">Email :</label>
              <input type="email" name="emailResponsable" id="inputEmailResponsable" value="{{ old('emailResponsable') }}" class="form-control" required>
            </div>
          </div>

          <div class="row">
            <div class="form-group col-lg-12">
              <label for="inputJourRencontre">Jours de la semaine où il est possible de le rencontrer :</label></br>
                <label class="checkbox-inline">
                  <input type="checkbox" name="jourRencontre[]" id="inputJourRencontre" value="option1"> Lundi
                </label>
                <label class="checkbox-inline">
                  <input type="checkbox" name="jourRencontre[]" id="inputJourRencontre" value="option2"> Mardi
                </label>
                <label class="checkbox-inline">
                  <input type="checkbox" name="jourRencontre[]" id="inputJourRencontre" value="option3"> Mercredi
                </label>
                <label class="checkbox-inline">
                  <input type="checkbox" name="jourRencontre[]" id="inputJourRencontre" value="option1"> Jeudi
                </label>
                <label class="checkbox-inline">
                  <input type="checkbox" name="jourRencontre[]" id="inputJourRencontre" value="option2"> Vendredi
                </label>
                <label class="checkbox-inline">
                  <input type="checkbox" name="jourRencontre[]" id="inputJourRencontre" value="option3"> Samedi
                </label>
            </div>
          </div>

        </div>

      </div>
    </div>


    <div class="col-lg-6">
      <div class="page-header">
        <h1>Etudiant</h1>
      </div>

      <div class="etudiant">
        <div class="row">
          <div class="form-group col-lg-7">
            <label for="inputTelEtudiantEntreprise">Numéro de télephone <small>(Où l'on peut vous joindre en entreprise)</small> : </label>
            <input type="text" name="telEtudiantEntreprise" id="inputTelEtudiantEntreprise" value="{{ old('telEtudiantEntreprise') }}" class="form-control" required pattern="^0[1-8]([-. ]?[0-9]{2}){4}$">
          </div>
        </div>

        <div class="row">
          <div class="form-group col-lg-7">
            <label for="inputTelEtudiantPortable">Numéro de télephone portable :</label>
            <input type="text" name="telEtudiantPortable" id="inputTelEtudiantPortable" value="{{ old('telEtudiantPortable') }}" class="form-control" required pattern="^0(6|7)([-. ]?[0-9]{2}){4}$">
          </div>
        </div>

        <div class="row">
          <div class="form-group col-lg-7">
            <label for="inputEmailEtudiantPerso">Email personnel :</label>
            <input type="email" name="emailEtudiantPerso" id="inputEmailEtudiantPerso" value="{{ old('emailEtudiantPerso') }}" class="form-control" required>
          </div>
        </div>
      </div>

      <div class="stage">
        <div class="page-header">
          <h1>Stage</h1>
        </div>

        <div class="row">
          <div class="form-group col-lg-9">
            <label for="inputSujetStage">Sujet du stage : </label>
            <textarea class="form-control" rows="2" name="sujetStage" id="inputSujetStage" required>{{ old('sujetStage') }}</textarea>
          </div>
        </div>
      </div>

    @if(count($errors->all()) >= 1)
          <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
              <div class="panel-alert transparent">
                <div class="alert alert-danger" role="alert">
                  @foreach ($errors->all() as $error)
                     <div>{{ $error }}</div>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
    @endif

      <div class="row">
        <div class="col-lg-12">
          <button type="submit" style="margin-top:50px;" class="btn col-lg-2 col-lg-offset-5 btn-primary" id="submitLocalisation">Valider</button>
        </div>
      </div>

    </div>
  </form>
</div>

<script src="{{asset('js/localisation.js')}}"></script>
