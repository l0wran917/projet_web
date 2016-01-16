<div class="row">
  <div class="col-lg-12">
    <div class="page-header">
      <h1>Contre-Rendu de Visite de Stage</h1>
    </div>
  </div>
</div>
<div class="col-lg-6">
    <div class="row">
      <div class="col-lg-10">

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
                      <!-- ajouter le nom du tuteur en entreprise avec le nom de l'etudiant ?-->
                      <option value="0">Selectionnez un etudiant</option>
                      <option value="1">Bassin Laurent</option>
                      <option value="2">Jean-Baptiste Pinouf</option>
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
     <!-- A faire apparaitre quand l'etudiant est choisi -->
    <div class="" style="margin:1%;"> </div>
    <h2>Entreprise (Ne modifiez que les informations incorrectes)</h2>
    <div class="row">
        <!-- Code a inserer pour mettre les infos que l'etudiant a rentré -->
        <div class="form-group col-lg-6">
            <label for="inputNomEtablissement">Entreprise (Raison Sociale) :</label>
            <input type="text" name="nomEtablissement" id="inputNomEtablissement" class="form-control" required>
        </div>
        <div class="" style="margin:1%;"> </div>
    </div>
    <h3>Adresse de l'établissement</h3>
    <div class="row">
        <div class="form-group col-lg-6">
            <label for="inputAdresseEtablissement">Numéro et nom de rue :</label>
            <input type="text" name="adresseEtablissement" id="inputAdresseEtablissement" class="form-control" required>
        </div>
    </div>

    <div class="row">
        <div class="form-group col-lg-6">
            <label for="inputVilleEtablissement">Ville de l'établissement :</label>
            <input type="text" name="villeEtablissement" id="inputVilleEtablissement" class="form-control" required>
        </div>
        <div class="form-group col-lg-3">
            <label for="inputCPEtablissement">Code postal :</label>
            <input type="text" name="cpEtablissement" id="inputCPEtablissement" class="form-control" required pattern="[0-9]{5}">
        </div>
    </div>
    <div class="" style="margin:1%;"> </div>
    <div class="row">
        <div class="form-group col-lg-12">
            <label for="inputRencontreStage">Vous êtes vous rendu sur le lieu du stage pour rencontre le stagiaire et son responsable de stage ?</label>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2">
          <label class="radio-inline" for="inputRencontreNon">
            <input type="radio" name="inputRencontre" id="inputRencontreNon" value="0" required> Non
          </label>
        </div>
        <div class="col-sm-2">
          <label class="radio-inline"  for="inputRencontreOui">
            <input type="radio" name="inputRencontre" id="inputRencontreOui" value="1" required> Oui
          </label>
        </div>
        <div class="col-sm-3 dontshow">
            <label class="sr-only" for="inputDateRencontre">Quand ?</label>
            <div class="input-group">
              <input type="text" class="form-control" name="dateRencontre" id="inputDateRencontre" placeholder="Combien ?">
            </div>
        </div>
    </div>
    <div class="" style="margin:1%;"> </div>
    <div class="row">
        <h3>Responsble rencontré</h3>
        <div class="form-group">
            <label class="control-label col-xs-2" for="inputNomResponsa">Nom et fonction:</label>
            <div class="col-xs-5">
                <input type="text" class="form-control" name="nomResponsa" id="inputNomResponsa" placeholder="Ex : Mr Dupond - Big Boss" required>
            </div>
        </div>
    </div>
    <div class="row">
        <h3>Contact RH</h3>
        <div class="form-horizontal">
            <div class="form-group">
              <label class="control-label col-xs-2" for="inputNomRH">Nom:</label>
              <div class="col-xs-5">
                <input type="text" class="form-control" name="nomRH" id="inputNomRH" placeholder="Ex : Mr Dupond" required>
              </div>
            </div>
            <!--  -->
            <div class="form-group">
              <label class="control-label col-xs-2" for="inputEmailRH">Email:</label>
              <div class="col-xs-5">
                <input type="text" class="form-control" name="emailRH" id="inputEmailRH" placeholder="Ex : dupond@orange.fr" required>
              </div>
            </div>
            <!--  -->
            <div class="form-group">
              <label class="control-label col-xs-2" for="inputTelRH">Téléphone:</label>
              <div class="col-xs-5">
                <input type="text" class="form-control" name="telRH" id="inputTelRH" placeholder="Ex : 01 02 03 04 05" required>
              </div>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-6">

</div>
