<form class="" action="" method="post">
  <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
  <div class="row">
    <div class="col-lg-12">
      <div class="page-header">
        <h1>Appréciations sur le stagiaire</h1>
      </div>
    </div>

    <div class="col-lg-6">
      <div class="appreciationSurStagiaire">

        <h3>Méthode de travail et aptitudes</h3>
        <div class="form-decalage-group">

          <div class="row">
            <div class="col-xs-4">
              Niveau de connaissance
            </div>
            <div class="col-xs-2 text-center">
              <label class="radio-inline" for="inputNiveauConnaissanceExcellent">
                <input type="radio" name="niveauConnaissance" id="inputNiveauConnaissanceExcellent" value="4" {{ $data['appreciation']->connaissance == 4 ? 'checked' : ''}} required> Excellent
              </label>
            </div>
            <div class="col-xs-2 text-center">
              <label class="radio-inline" for="inputNiveauConnaissanceBon">
                <input type="radio" name="niveauConnaissance" id="inputNiveauConnaissanceBon" value="3" {{ $data['appreciation']->connaissance == 3 ? 'checked' : ''}} required> Bon
              </label>
            </div>
            <div class="col-xs-2 text-center">
              <label class="radio-inline" for="inputNiveauConnaissanceMoyen">
                <input type="radio" name="niveauConnaissance" id="inputNiveauConnaissanceMoyen" value="2" {{ $data['appreciation']->connaissance == 2 ? 'checked' : ''}} required> Moyen
              </label>
            </div>
            <div class="col-xs-2 text-center">
              <label class="radio-inline" for="inputNiveauConnaissanceInsuffisant">
                <input type="radio" name="niveauConnaissance" id="inputNiveauConnaissanceInsuffisant" value="1" {{ $data['appreciation']->connaissance == 1 ? 'checked' : ''}} required> Insuffisant
              </label>
            </div>
          </div>

          <!--  -->

          <div class="row">
            <div class="col-xs-4">
              Organisation
            </div>
            <div class="col-xs-2 text-center">
              <label class="radio-inline" for="inputNiveauOrganisationExcellent">
                <input type="radio" name="niveauOrganisation" id="inputNiveauOrganisationExcellent" value="4" {{ $data['appreciation']->organisation == 4 ? 'checked' : ''}} required> Excellent
              </label>
            </div>
            <div class="col-xs-2 text-center">
              <label class="radio-inline" for="inputNiveauOrganisationBon">
                <input type="radio" name="niveauOrganisation" id="inputNiveauOrganisationBon" value="3" {{ $data['appreciation']->organisation == 3 ? 'checked' : ''}} required> Bon
              </label>
            </div>
            <div class="col-xs-2 text-center">
              <label class="radio-inline" for="inputNiveauOrganisationMoyen">
                <input type="radio" name="niveauOrganisation" id="inputNiveauOrganisationMoyen" value="2" {{ $data['appreciation']->organisation == 2 ? 'checked' : ''}} required> Moyen
              </label>
            </div>
            <div class="col-xs-2 text-center">
              <label class="radio-inline" for="inputNiveauOrganisationInsuffisant">
                <input type="radio" name="niveauOrganisation" id="inputNiveauOrganisationInsuffisant" value="1" {{ $data['appreciation']->organisation == 1 ? 'checked' : ''}} required> Insuffisant
              </label>
            </div>
          </div>

          <!--  -->

          <div class="row">
            <div class="col-xs-4">
              Initiative
            </div>
            <div class="col-xs-2 text-center">
              <label class="radio-inline" for="inputNiveauInitiativeExcellent">
                <input type="radio" name="niveauInitiative" id="inputNiveauInitiativeExcellent" value="4" {{ $data['appreciation']->initiative == 4 ? 'checked' : ''}} required> Excellent
              </label>
            </div>
            <div class="col-xs-2 text-center">
              <label class="radio-inline" for="inputNiveauInitiativeBon">
                <input type="radio" name="niveauInitiative" id="inputNiveauInitiativeBon" value="3" {{ $data['appreciation']->initiative == 3 ? 'checked' : ''}} required> Bon
              </label>
            </div>
            <div class="col-xs-2 text-center">
              <label class="radio-inline" for="inputNiveauInitiativeMoyen">
                <input type="radio" name="niveauInitiative" id="inputNiveauInitiativeMoyen" value="2" {{ $data['appreciation']->initiative == 2 ? 'checked' : ''}} required> Moyen
              </label>
            </div>
            <div class="col-xs-2 text-center">
              <label class="radio-inline" for="inputNiveauInitiativeInsuffisant">
                <input type="radio" name="niveauInitiative" id="inputNiveauInitiativeInsuffisant" value="1" {{ $data['appreciation']->initiative == 1 ? 'checked' : ''}} required> Insuffisant
              </label>
            </div>
          </div>

          <!--  -->

          <div class="row">
            <div class="col-xs-4">
              Persévérance
            </div>
            <div class="col-xs-2 text-center">
              <label class="radio-inline" for="inputNiveauPerseveranceExcellent">
                <input type="radio" name="niveauPerseverance" id="inputNiveauPerseveranceExcellent" value="4" {{ $data['appreciation']->perseverance == 4 ? 'checked' : ''}} required> Excellent
              </label>
            </div>
            <div class="col-xs-2 text-center">
              <label class="radio-inline" for="inputNiveauPerseveranceBon">
                <input type="radio" name="niveauPerseverance" id="inputNiveauPerseveranceBon" value="3" {{ $data['appreciation']->perseverance == 3 ? 'checked' : ''}} required> Bon
              </label>
            </div>
            <div class="col-xs-2 text-center">
              <label class="radio-inline" for="inputNiveauPerseveranceMoyen">
                <input type="radio" name="niveauPerseverance" id="inputNiveauPerseveranceMoyen" value="2" {{ $data['appreciation']->perseverance == 2 ? 'checked' : ''}} required> Moyen
              </label>
            </div>
            <div class="col-xs-2 text-center">
              <label class="radio-inline" for="inputNiveauPerseveranceInsuffisant">
                <input type="radio" name="niveauPerseverance" id="inputNiveauPerseveranceInsuffisant" value="1" {{ $data['appreciation']->perseverance == 1 ? 'checked' : ''}} required> Insuffisant
              </label>
            </div>
          </div>

          <!--  -->

          <div class="row">
            <div class="col-xs-4">
              Efficacité
            </div>
            <div class="col-xs-2 text-center">
              <label class="radio-inline" for="inputNiveauEfficaciteExcellent">
                <input type="radio" name="niveauEfficacite" id="inputNiveauEfficaciteExcellent" value="4" {{ $data['appreciation']->efficacite == 4 ? 'checked' : ''}} required> Excellent
              </label>
            </div>
            <div class="col-xs-2 text-center">
              <label class="radio-inline" for="inputNiveauEfficaciteBon">
                <input type="radio" name="niveauEfficacite" id="inputNiveauEfficaciteBon" value="3" {{ $data['appreciation']->efficacite == 3 ? 'checked' : ''}} required> Bon
              </label>
            </div>
            <div class="col-xs-2 text-center">
              <label class="radio-inline" for="inputNiveauEfficaciteMoyen">
                <input type="radio" name="niveauEfficacite" id="inputNiveauEfficaciteMoyen" value="2" {{ $data['appreciation']->efficacite == 2 ? 'checked' : ''}} required> Moyen
              </label>
            </div>
            <div class="col-xs-2 text-center">
              <label class="radio-inline" for="inputNiveauEfficaciteInsuffisant">
                <input type="radio" name="niveauEfficacite" id="inputNiveauEfficaciteInsuffisant" value="1" {{ $data['appreciation']->efficacite == 1 ? 'checked' : ''}} required> Insuffisant
              </label>
            </div>
          </div>

          <!--  -->

          <div class="row">
            <div class="col-xs-4">
              Intérêt porté au travail
            </div>
            <div class="col-xs-2 text-center">
              <label class="radio-inline" for="inputNiveauInteretExcellent">
                <input type="radio" name="niveauInteret" id="inputNiveauInteretExcellent" value="4" {{ $data['appreciation']->interet == 4 ? 'checked' : ''}} required> Excellent
              </label>
            </div>
            <div class="col-xs-2 text-center">
              <label class="radio-inline" for="inputNiveauInteretBon">
                <input type="radio" name="niveauInteret" id="inputNiveauInteretBon" value="3" {{ $data['appreciation']->interet == 3 ? 'checked' : ''}} required> Bon
              </label>
            </div>
            <div class="col-xs-2 text-center">
              <label class="radio-inline" for="inputNiveauInteretMoyen">
                <input type="radio" name="niveauInteret" id="inputNiveauInteretMoyen" value="2" {{ $data['appreciation']->interet == 2 ? 'checked' : ''}} required> Moyen
              </label>
            </div>
            <div class="col-xs-2 text-center">
              <label class="radio-inline" for="inputNiveauInteretInsuffisant">
                <input type="radio" name="niveauInteret" id="inputNiveauInteretInsuffisant" value="1" {{ $data['appreciation']->interet == 1 ? 'checked' : ''}} required> Insuffisant
              </label>
            </div>
          </div>


        </div> <!-- Decalage -->

        <h3>Comportement Géneral</h3>
        <div class="form-decalage-group">

          <div class="row">
            <div class="col-xs-4">
              Présentation
            </div>
            <div class="col-xs-2 text-center">
              <label class="radio-inline" for="inputNiveauPresentationExcellent">
                <input type="radio" name="niveauPresentation" id="inputNiveauPresentationExcellent" value="4" {{ $data['appreciation']->presentation == 4 ? 'checked' : ''}} required> Excellent
              </label>
            </div>
            <div class="col-xs-2 text-center">
              <label class="radio-inline" for="inputNiveauPresentationBon">
                <input type="radio" name="niveauPresentation" id="inputNiveauPresentationBon" value="3" {{ $data['appreciation']->presentation == 3 ? 'checked' : ''}} required> Bon
              </label>
            </div>
            <div class="col-xs-2 text-center">
              <label class="radio-inline" for="inputNiveauPresentationMoyen">
                <input type="radio" name="niveauPresentation" id="inputNiveauPresentationMoyen" value="2" {{ $data['appreciation']->presentation == 2 ? 'checked' : ''}} required> Moyen
              </label>
            </div>
            <div class="col-xs-2 text-center">
              <label class="radio-inline" for="inputNiveauPresentationInsuffisant">
                <input type="radio" name="niveauPresentation" id="inputNiveauPresentationInsuffisant" value="1" {{ $data['appreciation']->presentation == 1 ? 'checked' : ''}} required> Insuffisant
              </label>
            </div>
          </div>

          <!--  -->

          <div class="row">
            <div class="col-xs-4">
              Ponctualité
            </div>
            <div class="col-xs-2 text-center">
              <label class="radio-inline" for="inputNiveauPonctualiteExcellent">
                <input type="radio" name="niveauPonctualite" id="inputNiveauPonctualiteExcellent" value="4" {{ $data['appreciation']->ponctualite == 4 ? 'checked' : ''}} required> Excellent
              </label>
            </div>
            <div class="col-xs-2 text-center">
              <label class="radio-inline" for="inputNiveauPonctualiteBon">
                <input type="radio" name="niveauPonctualite" id="inputNiveauPonctualiteBon" value="3" {{ $data['appreciation']->ponctualite == 3 ? 'checked' : ''}} required> Bon
              </label>
            </div>
            <div class="col-xs-2 text-center">
              <label class="radio-inline" for="inputNiveauPonctualiteMoyen">
                <input type="radio" name="niveauPonctualite" id="inputNiveauPonctualiteMoyen" value="2" {{ $data['appreciation']->ponctualite == 2 ? 'checked' : ''}} required> Moyen
              </label>
            </div>
            <div class="col-xs-2 text-center">
              <label class="radio-inline" for="inputNiveauPonctualiteInsuffisant">
                <input type="radio" name="niveauPonctualite" id="inputNiveauPonctualiteInsuffisant" value="1" {{ $data['appreciation']->ponctualite == 1 ? 'checked' : ''}} required> Insuffisant
              </label>
            </div>
          </div>

          <!--  -->

          <div class="row">
            <div class="col-xs-4">
              Assiduité
            </div>
            <div class="col-xs-2 text-center">
              <label class="radio-inline" for="inputNiveauAssiduiteExcellent">
                <input type="radio" name="niveauAssiduite" id="inputNiveauAssiduiteExcellent" value="4" {{ $data['appreciation']->assiduite == 4 ? 'checked' : ''}} required> Excellent
              </label>
            </div>
            <div class="col-xs-2 text-center">
              <label class="radio-inline" for="inputNiveauAssiduiteBon">
                <input type="radio" name="niveauAssiduite" id="inputNiveauAssiduiteBon" value="3" {{ $data['appreciation']->assiduite == 3 ? 'checked' : ''}} required> Bon
              </label>
            </div>
            <div class="col-xs-2 text-center">
              <label class="radio-inline" for="inputNiveauAssiduiteMoyen">
                <input type="radio" name="niveauAssiduite" id="inputNiveauAssiduiteMoyen" value="2" {{ $data['appreciation']->assiduite == 2 ? 'checked' : ''}} required> Moyen
              </label>
            </div>
            <div class="col-xs-2 text-center">
              <label class="radio-inline" for="inputNiveauAssiduiteInsuffisant">
                <input type="radio" name="niveauAssiduite" id="inputNiveauAssiduiteInsuffisant" value="1" {{ $data['appreciation']->assiduite == 1 ? 'checked' : ''}} required> Insuffisant
              </label>
            </div>
            </div>

          <!--  -->

          <div class="row">
            <div class="col-xs-4">
              Expression
            </div>
            <div class="col-xs-2 text-center">
              <label class="radio-inline" for="inputNiveauExpressionExcellent">
                <input type="radio" name="niveauExpression" id="inputNiveauExpressionExcellent" value="4" {{ $data['appreciation']->expression == 4 ? 'checked' : ''}} required> Excellent
              </label>
            </div>
            <div class="col-xs-2 text-center">
              <label class="radio-inline" for="inputNiveauExpressionBon">
                <input type="radio" name="niveauExpression" id="inputNiveauExpressionBon" value="3" {{ $data['appreciation']->expression == 3 ? 'checked' : ''}} required> Bon
              </label>
            </div>
            <div class="col-xs-2 text-center">
              <label class="radio-inline" for="inputNiveauExpressionMoyen">
                <input type="radio" name="niveauExpression" id="inputNiveauExpressionMoyen" value="2" {{ $data['appreciation']->expression == 2 ? 'checked' : ''}} required> Moyen
              </label>
            </div>
            <div class="col-xs-2 text-center">
              <label class="radio-inline" for="inputNiveauExpressionInsuffisant">
                <input type="radio" name="niveauExpression" id="inputNiveauExpressionInsuffisant" value="1" {{ $data['appreciation']->expression == 1 ? 'checked' : ''}} required> Insuffisant
              </label>
            </div>
            </div>

          <!--  -->

          <div class="row">
            <div class="col-xs-4">
              Sociabilité
            </div>
            <div class="col-xs-2 text-center">
              <label class="radio-inline" for="inputNiveauSociabiliteExcellent">
                <input type="radio" name="niveauSociabilite" id="inputNiveauSociabiliteExcellent" value="4" {{ $data['appreciation']->sociabilite == 4 ? 'checked' : ''}} required> Excellent
              </label>
            </div>
            <div class="col-xs-2 text-center">
              <label class="radio-inline" for="inputNiveauSociabiliteBon">
                <input type="radio" name="niveauSociabilite" id="inputNiveauSociabiliteBon" value="3" {{ $data['appreciation']->sociabilite == 3 ? 'checked' : ''}} required> Bon
              </label>
            </div>
            <div class="col-xs-2 text-center">
              <label class="radio-inline" for="inputNiveauSociabiliteMoyen">
                <input type="radio" name="niveauSociabilite" id="inputNiveauSociabiliteMoyen" value="2" {{ $data['appreciation']->sociabilite == 2 ? 'checked' : ''}} required> Moyen
              </label>
            </div>
            <div class="col-xs-2 text-center">
              <label class="radio-inline" for="inputNiveauSociabiliteInsuffisant">
                <input type="radio" name="niveauSociabilite" id="inputNiveauSociabiliteInsuffisant" value="1" {{ $data['appreciation']->sociabilite == 1 ? 'checked' : ''}} required> Insuffisant
              </label>
            </div>
            </div>

          <!--  -->

          <div class="row">
            <div class="col-xs-4">
              Communication
            </div>
            <div class="col-xs-2 text-center">
              <label class="radio-inline" for="inputNiveauCommunicationExcellent">
                <input type="radio" name="niveauCommunication" id="inputNiveauCommunicationExcellent" value="4" {{ $data['appreciation']->communication == 4 ? 'checked' : ''}} required> Excellent
              </label>
            </div>
            <div class="col-xs-2 text-center">
              <label class="radio-inline" for="inputNiveauCommunicationBon">
                <input type="radio" name="niveauCommunication" id="inputNiveauCommunicationBon" value="3" {{ $data['appreciation']->communication == 3 ? 'checked' : ''}} required> Bon
              </label>
            </div>
            <div class="col-xs-2 text-center">
              <label class="radio-inline" for="inputNiveauCommunicationMoyen">
                <input type="radio" name="niveauCommunication" id="inputNiveauCommunicationMoyen" value="2" {{ $data['appreciation']->communication == 2 ? 'checked' : ''}} required> Moyen
              </label>
            </div>
            <div class="col-xs-2 text-center">
              <label class="radio-inline" for="inputNiveauCommunicationInsuffisant">
                <input type="radio" name="niveauCommunication" id="inputNiveauCommunicationInsuffisant" value="1" {{ $data['appreciation']->communication == 1 ? 'checked' : ''}} required> Insuffisant
              </label>
            </div>
            </div>

        </div> <!-- Decalage -->

        <h3>Concernant l'étudiant</h3>
        <div class="form-decalage-group">
          <div class="row">
            <div class="col-xs-12">
              <label>Embaucheriez-vous le stagiaire si vous en aviez la possibilité ?</br>
                <small>(Ceci n'a pour but que d'apprécier les services que pourrait rendre le candidat dans votre entreprise)</small>
              </label>
            </div>
            <div class="col-xs-12">
              <div class="form-horizontal">
                <div class="form-group">
                  <div class="col-sm-2">
                    <label class="radio-inline">
                      <input type="radio" name="embaucheEtudiant" id="inputEmbaucheEtudiantOui" value="2" {{ $data['appreciation']->embauche == 2 ? 'checked' : ''}} required> Oui
                    </label>
                  </div>
                  <div class="col-sm-2">
                    <label class="radio-inline">
                      <input type="radio" name="embaucheEtudiant" id="inputEmbaucheEtudiantPe" value="1" {{ $data['appreciation']->embauche == 1 ? 'checked' : ''}} required> Peut-etre
                    </label>
                  </div>
                  <div class="col-sm-2">
                    <label class="radio-inline">
                      <input type="radio" name="embaucheEtudiant" id="inputEmbaucheEtudiantNon" value="0" {{ $data['appreciation']->embauche == 0 ? 'checked' : ''}} required> Non
                    </label>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-12">
              <div class="form-group">
                <label class="col-xs-2" for="inputEmbauchePourquoi">Pourquoi ?</label>
                <div class="col-xs-10">
                  <textarea name="embauchePourquoi" class="form-control" id="inputEmbauchePourquoi" rows="2" cols="40" required>{{ $data['appreciation']->raisonEmbauche ? $data['appreciation']->raisonEmbauche : ''}}</textarea>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-12">
              <label>Seriez-vous présent lors de la soutenance de votre stagiaire ou un autre représentant de l'entreprise ?</label>
              <div class="form-horizontal">
                <div class="form-group">
                  <div class="col-sm-2">
                    <label class="radio-inline">
                      <input type="radio" name="presentSoutenance" id="inputPresentSoutenanceOui" value="1" {{ $data['appreciation']->tuteurPresentSoutenance == 1 ? 'checked' : ''}} required> Oui
                    </label>
                  </div>
                  <div class="col-sm-2">
                    <label class="radio-inline">
                      <input type="radio" name="presentSoutenance" id="inputPresentSoutenanceNon" value="0" {{ $data['appreciation']->tuteurPresentSoutenance == 0 ? 'checked' : ''}} required> Non
                    </label>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div> <!-- appreciationSurStagiaire -->

    </div> <!-- Col-6 -->

    <div class="col-lg-5 col-lg-offset-1">
      <div class="row">
        <div class="col-xs-12">

            <h3>Contact dans l'entreprise</h3>
            <div class="form-decalage-group">

              <h4>Contact RH</h4>
              <div class="form-decalage-group">

                <div class="form-horizontal">
                  <div class="form-group">
                    <label class="control-label col-xs-2" for="inputNomRH">Nom:</label>
                    <div class="col-xs-5">
                      <input type="text" class="form-control" name="nomRH" id="inputNomRH" placeholder="Ex : Mr Dupond" value="{{ $data['contact'][0]->nom ? $data['contact'][0]->nom : ''}}" required>
                    </div>
                  </div>
                  <!--  -->
                  <div class="form-group">
                    <label class="control-label col-xs-2" for="inputEmailRH">Email:</label>
                    <div class="col-xs-5">
                      <input type="text" class="form-control" name="emailRH" id="inputEmailRH" placeholder="Ex : dupond@orange.fr" value="{{ $data['contact'][0]->email ? $data['contact'][0]->email : ''}}" required>
                    </div>
                  </div>
                  <!--  -->
                  <div class="form-group">
                    <label class="control-label col-xs-2" for="inputTelRH">Téléphone:</label>
                    <div class="col-xs-5">
                      <input type="text" class="form-control" name="telRH" id="inputTelRH" placeholder="Ex : 01 02 03 04 05" value="{{ $data['contact'][0]->telephone ? $data['contact'][0]->telephone : ''}}" required>
                    </div>
                  </div>
                </div>

              </div> <!-- Decalage RH -->

              <div style="margin-top:6%;"> </div>

              <h4>Contact Taxe Apprentissage</h4>
              <div class="form-decalage-group">

                <div class="form-horizontal">
                  <div class="form-group">
                    <label class="control-label col-xs-2" for="inputNomTA">Nom:</label>
                    <div class="col-xs-5">
                      <input type="text" class="form-control" name="nomTA" id="inputNomTA" placeholder="Ex : Mr De Larue" value="{{ $data['contact'][1]->nom ? $data['contact'][1]->nom : ''}}" required>
                    </div>
                  </div>
                  <!--  -->
                  <div class="form-group">
                    <label class="control-label col-xs-2" for="inputEmailTA">Email:</label>
                    <div class="col-xs-5">
                      <input type="text" class="form-control" name="emailTA" id="inputEmailTA" placeholder="Ex : delarue@gmail.com" value="{{ $data['contact'][1]->email ? $data['contact'][1]->email : ''}}" required>
                    </div>
                  </div>
                  <!--  -->
                  <div class="form-group">
                    <label class="control-label col-xs-2" for="inputTelTA">Téléphone:</label>
                    <div class="col-xs-5">
                      <input type="text" class="form-control" name="telTA" id="inputTelTA" placeholder="Ex : 02 03 04 05 06" value="{{ $data['contact'][1]->telephone ? $data['contact'][1]->telephone : ''}}" required>
                    </div>
                  </div>
                </div>

              </div> <!-- Decalage TA -->

              <div style="margin-top:6%;"> </div>

              <h4>Contact Relations Ecoles</h4>
              <div class="form-decalage-group">

                <div class="form-horizontal">
                  <div class="form-group">
                    <label class="control-label col-xs-2" for="inputNomCE">Nom:</label>
                    <div class="col-xs-5">
                      <input type="text" class="form-control" name="nomRE" id="inputNomCE" placeholder="Ex : Mme Nemit" value="{{ $data['contact'][2]->nom ? $data['contact'][2]->nom : ''}}" required>
                    </div>
                  </div>
                  <!--  -->
                  <div class="form-group">
                    <label class="control-label col-xs-2" for="inputEmailCE">Email:</label>
                    <div class="col-xs-5">
                      <input type="text" class="form-control" name="emailRE" id="inputEmailCE" placeholder="Ex : nemit@regza.com" value="{{ $data['contact'][2]->email ? $data['contact'][2]->email : ''}}" required>
                    </div>
                  </div>
                  <!--  -->
                  <div class="form-group">
                    <label class="control-label col-xs-2" for="inputTelCE">Téléphone:</label>
                    <div class="col-xs-5">
                      <input type="text" class="form-control" name="telRE" id="inputTelCE" placeholder="Ex : 03 04 05 06 07" value="{{ $data['contact'][2]->telephone ? $data['contact'][2]->telephone : ''}}" required>
                    </div>
                  </div>
                </div>

              </div> <!-- Decalage CE -->

            </div><!-- Decalage Contact -->
        </div>
      </div> <!-- col-xs-12 -->

      <div style="margin-top:8%;">

      </div>

      <div class="row">
        <div class="col-xs-6 col-xs-offset-2">
          <input type="submit" class="btn btn-primary form-control" name="submitAvisStagiaire" value="Valider">
        </div>
      </div>

    </div> <!-- col-lg-6 -->


  </div> <!-- row -->

</form>
