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
                                    <option value="0">Sélectionnez un étudiant</option>
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
    <h3>Entreprise (Ne modifiez que les informations incorrectes)</h3>
    <div class="form-decalage-group">
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
                <div class="input-group">
                    <input type="text" class="form-control" name="dateRencontre" id="inputDateRencontre" placeholder="Quand ?">
                </div>
            </div>
        </div>
    </div>
    <div class="" style="margin:1%;"> </div>
    <div class="row">
        <h3>Responsable rencontré</h3>
        <div class="form-group col-lg-12">
            <label class="control-label col-xs-2" for="inputNomResponsa">Nom et fonction:</label>
            <div class="col-xs-5">
                <input type="text" class="form-control" name="nomResponsa" id="inputNomResponsa" placeholder="Ex : Mr Dupond - Big Boss" required>
            </div>
        </div>
    </div>
    <div class="row">
        <h3>Contact RH/Taxe d'apprentissage</h3>
        <div class="form-horizontal">
            <div class="form-group col-lg-12">
                <label class="control-label col-xs-2" for="inputNomRH">Nom:</label>
                <div class="col-xs-5">
                    <input type="text" class="form-control" name="nomRH" id="inputNomRH" placeholder="Ex : Mr Dupond" required>
                </div>
            </div>
            <!--  -->
            <div class="form-group col-lg-12">
                <label class="control-label col-xs-2" for="inputEmailRH">Email:</label>
                <div class="col-xs-5">
                    <input type="text" class="form-control" name="emailRH" id="inputEmailRH" placeholder="Ex : dupond@orange.fr" required>
                </div>
            </div>
            <!--  -->
            <div class="form-group col-lg-12">
                <label class="control-label col-xs-2" for="inputTelRH">Téléphone:</label>
                <div class="col-xs-5">
                    <input type="text" class="form-control" name="telRH" id="inputTelRH" placeholder="Ex : 01 02 03 04 05" required>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-6">
    <h3>Encadrement</h3>
    <div class="form-decalage-group">
        <div class="row">
            <div class="col-lg-12">
                <div class="form-horizontal">
                    <div class="form-group text-left">
                        <label class="col-sm-7 control-label">L'étudiant a-t-il été encadré par un informaticien ?</label>
                        <div class="col-sm-2">
                            <label class="radio-inline" for="inputEncadreInformaticienOui">
                                <input type="radio" name="encadrageInformaticien" id="inputEncadreInformaticienOui" data-id-hide="appelInformaticienForm" value="1" required> Oui
                            </label>
                        </div>
                        <div class="col-sm-2">
                            <label class="radio-inline" for="inputEncadreInformaticienNon">
                                <input type="radio" name="encadrageInformaticien" id="inputEncadreInformaticienNon" data-id-display="appelInformaticienForm" value="0" required> Non
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-horizontal dontshow" id="appelInformaticienForm">
                    <div class="form-group text-left">
                        <label class="col-sm-7 control-label">L'étudiant peut-il faire appel à un informaticien ?</label>
                        <div class="col-sm-2">
                            <label class="radio-inline" for="inputAppelInformaticienOui">
                                <input type="radio" name="appelInformaticien" id="inputAppelInformaticienOui" value="1" > Oui
                            </label>
                        </div>
                        <div class="col-sm-2">
                            <label class="radio-inline" for="inputAppelInformaticienNon">
                                <input type="radio" name="appelInformaticien" id="inputAppelInformaticienNon" value="0" > Non
                            </label>
                        </div>
                    </div>
                </div>
            </div> <!-- col -->
        </div> <!-- Row -->

        <div class="row">
            <div class="col-lg-12">
                <div class="form-horizontal">
                    <div class="form-group text-left">
                        <label class="col-sm-7 control-label">L'étudiant travaillé seul pendant son stage ?</label>
                        <div class="col-sm-2">
                            <label class="radio-inline" for="inputTravailSeulOui">
                                <input type="radio" name="travailSeul" id="inputTravailSeulOui" data-id-hide="tailleEquipeForm" value="1"> Oui
                            </label>
                        </div>
                        <div class="col-sm-2">
                            <label class="radio-inline" for="inputTravailSeulNon">
                                <input type="radio" name="travailSeul" id="inputTravailSeulNon" data-id-display="tailleEquipeForm" value="0"> Non
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-horizontal dontshow" id="tailleEquipeForm">
                    <div class="form-group text-left">
                        <label class="col-sm-3 control-label" style="text-align:right !important;" for="inputTailleEquipe">Taille de l'equipe  :</label>
                        <div class="col-sm-3">
                            <input type="text" name="tailleEquipe" id="inputTailleEquipe" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h3>Objet Principal Du Stage <small>(2 Choix maximum)</small></h3>
    <div class="form-decalage-group">
        <div class="row">
            <div class="col-lg-12">
                <div class="form-horizontal">
                    <div class="form-group text-left">
                        <div class="row">
                            <div class="col-sm-3">
                                <label class="radio-inline">
                                    <input type="checkbox" name="objetStage[]" id="inputObjetStageSysteme" value="1"> Système
                                </label>
                            </div>
                            <div class="col-sm-3">
                                <label class="radio-inline">
                                    <input type="checkbox" name="objetStage[]" id="inputObjetStageMultimedia" value="2"> Multimédia
                                </label>
                            </div>
                            <div class="col-sm-3">
                                <label class="radio-inline">
                                    <input type="checkbox" name="objetStage[]" id="inputObjetStageReseau" value="4"> Réseaux
                                </label>
                            </div>
                            <div class="col-sm-3">
                                <label class="radio-inline">
                                    <input type="checkbox" name="objetStage[]" id="inputObjetStageDevWeb" value="8"> Dév Web
                                </label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3">
                                <label class="radio-inline">
                                    <input type="checkbox" name="objetStage[]" id="inputObjetStageAutreDev" value="16"> Autres dév
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="checkbox" name="objetStage[]" id="inputObjetStageBdd" value="32"> Bases de données
                                </label>
                            </div>
                        </div>
                        <div class="row" style="margin-top:1%;">
                            <div class="col-sm-2">
                                <label class="radio-inline">
                                    <input type="checkbox" name="objetStage[]" id="inputObjetStageAutre" value="64"> Autres:
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="sr-only" for="inputAutreSysteme">Autre systeme</label>
                                <input type="text" name="autreObjet" id="inputObjetStageAutreDetails" class="form-control" placeholder="Ex : Gestion de projet">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h3>Avis de l'entreprise sur le travail et le comportement de l'étudiant</h3>
    <div class="row">
        <div class="form-decalage-group">
                <div class="col-xs-2 text-center">
                    <label class="radio-inline" for="inputTravailExcellant">
                        <input type="radio" name="niveauTravail" id="inputTravailExcellant" value="4" required> Excellent
                    </label>
                </div>
                <div class="col-xs-2 text-center">
                    <label class="radio-inline" for="inputTravailBon">
                        <input type="radio" name="niveauTravail" id="inputTravailBon" value="3" required> Bon
                    </label>
                </div>
                <div class="col-xs-2 text-center">
                    <label class="radio-inline" for="inputTravailMoyen">
                        <input type="radio" name="niveauTravail" id="inputTravailMoyen" value="2" required> Moyen
                    </label>
                </div>
                <div class="col-xs-2 text-center">
                    <label class="radio-inline" for="inputTravailInsuffisant">
                        <input type="radio" name="niveauTravail" id="inputTravailinsuffisant" value="1" required> Insuffisant
                    </label>
                </div>
        </div>
    </div>
    <h3>Avis de l'entreprise sur la formation reçue à l'IUT</h3>

    <div class="row">
        <div class="col-lg-12">
            <div class="form-decalage-group">

                <div class="form-horizontal">
                    <div class="form-group">
                        <label class="col-sm-7 control-label">Dans la formation telle que vous l'avez perçue lors de la présence du stagiaire dans votre entreprise, avez-vous constaté des manques handicapants pour un futur informaticien ?</label>
                        <div class="col-sm-2">
                            <label class="radio-inline">
                                <input type="radio" name="satisactionStagiaire" id="inputSatisfactionStagiaireNon" data-id-hide="avisSatisfactionPourquoiForm" value="0" required> Non
                            </label>
                        </div>
                        <div class="col-sm-2">
                            <label class="radio-inline">
                                <input type="radio" name="satisactionStagiaire" id="inputSatisfactionStagiaireOui" data-id-display="avisSatisfactionPourquoiForm"  value="1" required> Oui
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-horizontal dontshow" id="avisSatisfactionPourquoiForm">
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="inputPourquoiSatisfaction">Pourquoi ?</label>
                        <div class="col-sm-8">
                            <textarea class="form-control" rows="2" name="pourquoiSatisaction" id="inputPourquoiSatisfaction"></textarea>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <h3>Avis général de l'enseignant sur le stage</h3>
    <div class="form-decalage-group">
        <div class="row">
            <label class="col-sm-7 control-label">Donnez votre avis sur le stage :
        </div>
        <div class="row">
            <div class="col-sm-12">
                <textarea class="form-control" rows="2" name="avisEnseignant" id="inputAvisEnseignant"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="form-decalage-group">
                <div class="form-horizontal">
                    <div class="form-group">
                        <label class="col-sm-7 control-label">En conclusion, cette entreprise peut-elle les prochaines années accueilir dans des conditions correctes des étudiants ?</label>
                        <div class="col-sm-2">
                            <label class="radio-inline">
                                <input type="radio" name="conclusionStage" id="inputConclusionStageOui" value="1" required> Oui
                            </label>
                        </div>
                        <div class="col-sm-2">
                            <label class="radio-inline">
                                <input type="radio" name="conclusionStage" id="inputConclusionStageNon" value="0" required> Non
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-decalage-group">
                <div class="form-horizontal">
                    <div class="form-group">
                        <div class="col-sm-9">
                            <label class="radio-inline">
                                <input type="radio" name="conclusionStage" id="inputConclusionStageOui" value="2" required> Oui, mais en prenant quelques précautions. Quelles précautions ?
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-decalge-group">
                <div class="form-horizontal">
                    <div class="col-sm-8">
                        <textarea class="form-control" rows="2" name="precautionStage" id="inputPrecautionStage"></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="" style="margin:3%;"> </div>
        <div class="row">
          <div class="col-xs-6 col-xs-offset-2">
            <input type="submit" class="btn btn-primary form-control" name="submitCompteRendu" value="Valider">
          </div>
        </div>

    </div>
</div>
