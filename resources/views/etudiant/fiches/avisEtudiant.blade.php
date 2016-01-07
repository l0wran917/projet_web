<form class="" action="" method="post" enctype="multipart/form-data">
<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
<div class="row">
  <div class="col-lg-12">
    <div class="page-header">
      <h1>Avis sur le stage</h1>
    </div>
  </div>
  <div class="col-lg-6">
    <h3>Rémunération</h3>
    <div class="form-decalage-group">

      <div class="row">
        <div class="col-lg-12">
          <div class="form-horizontal">
            <div class="form-group heightmax ">
              <label class="col-sm-5 control-label">Votre stage a-t-il été rémunéré ?</label>
              <div class="col-sm-2">
                <label class="radio-inline" for="inputRemunerationNon">
                  <input type="radio" name="remenerationStage" id="inputRemunerationNon" data-id-hide="inputMontantRemuneration" value="0"> Non
                </label>
              </div>
              <div class="col-sm-2">
                <label class="radio-inline"  for="inputRemunerationOui">
                  <input type="radio" name="remenerationStage" id="inputRemunerationOui" data-id-display="inputMontantRemuneration" value="1"> Oui
                </label>
              </div>
              <div class="col-sm-3">
                <label class="sr-only" for="inputMontantRemuneration">Combien ?</label>
                <input type="text" class="form-control dontshow" name="montantRemuneration" id="inputMontantRemuneration" placeholder="Combien ?">
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

    <h3>Encadrement</h3>
    <div class="form-decalage-group">

      <div class="row">
        <div class="col-lg-12">

          <div class="form-horizontal">
            <div class="form-group text-left">
              <label class="col-sm-7 control-label">Avez vous été encadré par un informaticien ?</label>
              <div class="col-sm-2">
                <label class="radio-inline" for="inputEncadreInformaticienOui">
                  <input type="radio" name="encadrageInfomaticien" id="inputEncadreInformaticienOui" data-id-hide="appelInformaticienForm" value="1"> Oui
                </label>
              </div>
              <div class="col-sm-2">
                <label class="radio-inline" for="inputEncadreInformaticienNon">
                  <input type="radio" name="encadrageInfomaticien" id="inputEncadreInformaticienNon" data-id-display="appelInformaticienForm" value="0"> Non
                </label>
              </div>
            </div>
          </div>

          <div class="form-horizontal dontshow" id="appelInformaticienForm">
            <div class="form-group text-left">
              <label class="col-sm-7 control-label">Pouviez-vous faire appel à un informaticien ?</label>
              <div class="col-sm-2">
                <label class="radio-inline" for="inputAppelInformaticienOui">
                  <input type="radio" name="appelInformaticien" id="inputAppelInformaticienOui" value="1"> Oui
                </label>
              </div>
              <div class="col-sm-2">
                <label class="radio-inline" for="inputAppelInformaticienNon">
                  <input type="radio" name="appelInformaticien" id="inputAppelInformaticienNon" value="0"> Non
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
              <label class="col-sm-7 control-label">Avec vous travaillé seul ?</label>
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

        </div> <!-- col -->
      </div> <!-- Row -->

    </div> <!-- decalage form -->

    <h3>Environnement General</h3>
    <div class="form-decalage-group">

      <div class="row">
        <div class="col-lg-12">

          <div class="form-horizontal">
            <div class="form-group text-left heightmax">
              <label class="col-sm-3 control-label">Type de matériel :</label>
              <div class="col-sm-2">
                <label class="radio-inline" for="inputTypeMateriel">
                  <input type="radio" name="typeMateriel" id="inputTypeMateriel" data-id-hide="inputTypeMaterielAutreDetails" value="PC"> PC
                </label>
              </div>
              <div class="col-sm-2">
                <label class="radio-inline" for="inputTypeMaterielAutre">
                  <input type="radio" name="typeMateriel" id="inputTypeMaterielAutre" data-id-display="inputTypeMaterielAutreDetails" value="PC"> Autres
                </label>
              </div>
              <div class="col-sm-4">
                <label class="sr-only" for="inputMontantRemuneration">Autre matériel</label>
                <input type="text" class="form-control dontshow" name="typeMateriel" id="inputTypeMaterielAutreDetails" placeholder="Ex : Papier">

              </div>
            </div>
          </div>



          <div class="form-horizontal">
            <div class="form-group text-left">

              <label class="col-sm-2 control-label" for="inputSysteme">Système:</label>
              <div class="col-sm-2">
                <label class="radio-inline">
                  <input type="checkbox" name="typeSysteme[]" id="inputSystemeUnix" value="unix"> Unix
                </label>
              </div>
              <div class="col-sm-2">
                <label class="radio-inline">
                  <input type="checkbox" name="typeSysteme[]" id="inputSystemeLinux" value="linux"> Linux
                </label>
              </div>
              <div class="col-sm-2">
                <label class="radio-inline">
                  <input type="checkbox" name="typeSysteme[]" id="inputSystemeNT" value="nt"> NT
                </label>
              </div>
              <div class="col-sm-3">
                <label class="radio-inline">
                  <input type="checkbox" name="typeSysteme[]" id="inputSystemeWindows" value="windows"> Windows
                </label>
              </div>
            </div>
          </div>

          <div class="form-horizontal">
            <div class="form-group text-left">
              <div class="col-sm-2 col-sm-offset-2">
                <label class="radio-inline">
                  <input type="checkbox" name="typeSysteme[]" id="inputSystemeAutres" value="autre"> Autres:
                </label>
              </div>
              <div class="col-sm-3">
                  <label class="sr-only" for="inputAutreSystemeAutreDetails">Autre systeme</label>
                  <input type="text" name="autreSysteme" id="inputAutreSystemeAutreDetails" class="form-control" placeholder="Ex : Android">
              </div>
            </div>
          </div>

          <div class="form-horizontal">
            <div class="form-group text-left">
              <label class="col-sm-2 control-label" for="inputLangages">Langages : <small>(Separés par une virgule)</small></label>
              <div class="col-sm-9">
                  <textarea class="form-control" rows="2" name="langages" id="inputLangages"></textarea>
              </div>
            </div>
          </div>

        </div> <!-- col -->
      </div> <!-- Row -->

    </div> <!-- decalage form -->

  <h3>Objet Principal Du Stage <small>(2 Choix maximum)</small></h3>
  <div class="form-decalage-group">

    <div class="row">
      <div class="col-lg-12">

        <div class="form-horizontal">
          <div class="form-group text-left">
            <div class="row">

              <div class="col-sm-3">
                <label class="radio-inline">
                  <input type="checkbox" name="objetStage[]" id="inputObjetStageSysteme" value="systeme"> Système
                </label>
              </div>
              <div class="col-sm-3">
                <label class="radio-inline">
                  <input type="checkbox" name="objetStage[]" id="inputObjetStageMultimedia" value="multimedia"> Multimédia
                </label>
              </div>
              <div class="col-sm-3">
                <label class="radio-inline">
                  <input type="checkbox" name="objetStage[]" id="inputObjetStageReseau" value="reseaux"> Réseaux
                </label>
              </div>
              <div class="col-sm-3">
                <label class="radio-inline">
                  <input type="checkbox" name="objetStage[]" id="inputObjetStageDevWeb" value="devWeb"> Dév Web
                </label>
              </div>

            </div>

            <div class="row">

              <div class="col-sm-3">
                <label class="radio-inline">
                  <input type="checkbox" name="objetStage[]" id="inputObjetStageAutreDev" value="autresDev"> Autres dév
                </label>
              </div>
              <div class="col-sm-4">
                <label class="radio-inline">
                  <input type="checkbox" name="objetStage[]" id="inputObjetStageBdd" value="daseDeDonnees"> Bases de données
                </label>
              </div>

            </div>

            <div class="row" style="margin-top:1%;">
              <div class="col-sm-2">
                <label class="radio-inline">
                  <input type="checkbox" name="objetStage[]" id="inputObjetStageAutre" value="autre"> Autres:
                </label>
              </div>
              <div class="col-sm-4">
                  <label class="sr-only" for="inputAutreSysteme">Autre systeme</label>
                  <input type="text" name="autreSysteme" id="inputObjetStageAutreDetails" class="form-control" placeholder="Ex : Gestion de projet">
              </div>
            </div>

            </div>
          </div>

        </div>

      </div> <!-- col -->
    </div> <!-- Row -->

  </div> <!-- decalage form -->

  <div class="col-lg-6">
    <h3>Avis de l'étudiant</h3>

      <div class="row">
        <div class="col-lg-12">

          <div class="form-decalage-group">
            <div class="form-horizontal">
              <div class="form-group">
                <label class="col-sm-7 control-label">Etes vous totalement satisfait des conditions dans lesqelles ce sont déroulées votre stage ?</label>
                <div class="col-sm-2">
                  <label class="radio-inline">
                    <input type="radio" name="avisCondition" id="inputAvisConditionOui" data-id-hide="avisConditionPourquoiForm" value="1"> Oui
                  </label>
                </div>
                <div class="col-sm-2">
                  <label class="radio-inline">
                    <input type="radio" name="avisCondition" id="inputAvisConditionNon" data-id-display="avisConditionPourquoiForm"  value="0"> Non
                  </label>
                </div>
              </div>
            </div>

            <div class="form-horizontal dontshow" id="avisConditionPourquoiForm">
              <div class="form-group text-left">
                <label class="col-sm-2 col-sm-offset-1 control-label" for="inputPourquoiCondition">Pourquoi ?</label>
                <div class="col-sm-8">
                    <textarea class="form-control" rows="2" name="pourquoiCondition" id="inputPourquoiCondition"></textarea>
                </div>
              </div>
            </div>
          </div>

          <h3>Objectifs du stage</h3>
          <div class="form-decalage-group">

          <div class="col-lg-11" style="text-align:justify">
             <p class="tabulation">D'abord, il vous introduit dans le monde du travail, dans une ambiance que le futur professionnel
               de l'informatique doit connaître avec ses contraites de temps, de budget, de fonctionnement d'équipe, etc...</p>
             <p class="tabulation">Il vous permet d'être confronté, non plus à des exercices scolaires dont l'intérêt est souvent purement
               pédagogique, mais à des applications concrètes dans les domaines les plus variés.</p>
             <p class="tabulation">Il vous permet, soit d'approfoncir les connaissances acquises à l'IUT en étant confronté à des problèmes
               en vraie grandeur, soit de découvrir des environnements de travail, des méthodes d'analyse, des langages nouveaux.</p>
          </div>

          <div class="form-horizontal">
            <div class="form-group">
              <label class="col-sm-5 control-label">Ces objectifs ont-il été atteints ?</label>
              <div class="col-sm-2">
                <label class="radio-inline" for="inputObjectifsAtteintsOui">
                  <input type="radio" name="objectifsAtteints" id="inputObjectifsAtteintsOui" data-id-hide="inputObjectifsAtteintesPourquoiForm" value="1"> Oui
                </label>
              </div>
              <div class="col-sm-2">
                <label class="radio-inline" for="inputObjectifsAtteintsNon">
                  <input type="radio" name="objectifsAtteints" id="inputObjectifsAtteintsNon" data-id-display="inputObjectifsAtteintesPourquoiForm" value="0"> Non
                </label>
              </div>
            </div>
          </div>

          <div class="form-horizontal dontshow" id="inputObjectifsAtteintesPourquoiForm">
            <div class="form-group text-left">
              <label class="col-sm-2 col-sm-offset-1 control-label" for="inputObjectifsAtteintsPourquoi">Pourquoi ?</label>
              <div class="col-sm-8">
                  <textarea class="form-control" rows="2" name="objectifsAtteintsPourquoi" id="inputObjectifsAtteintsPourquoi"></textarea>
              </div>
            </div>
          </div>
        </div>

          <h3>Avis sur l'enseignement</h3>
          <div class="form-decalage-group">

            <div class="form-horizontal">
              <div class="form-group">
                <label class="col-sm-7 control-label">Estimez-vous que certaines matières enseignées n'ont pas été assez développées ?</label>
                <div class="col-sm-2">
                  <label class="radio-inline" for="inputMatiereDeveloppeOui">
                    <input type="radio" name="matiereDeveloppe" id="inputMatiereDeveloppeOui" data-id-display="matiereDeveloppeForm" value="1"> Oui
                  </label>
                </div>
                <div class="col-sm-2">
                  <label class="radio-inline" for="inputMatiereDeveloppeNon">
                    <input type="radio" name="matiereDeveloppe" id="inputMatiereDeveloppeNon" data-id-hide="matiereDeveloppeForm" value="0"> Non
                  </label>
                </div>
              </div>
            </div>

            <div class="form-horizontal dontshow" id="matiereDeveloppeForm">
              <div class="form-group text-left">
                <label class="col-sm-2 col-sm-offset-1 control-label" for="inputMatiereDeveloppePrecision">Lesquelles ?</label>
                <div class="col-sm-8">
                    <textarea class="form-control" rows="2" name="matiereDeveloppePrecision" id="inputMatiereDeveloppePrecision"></textarea>
                </div>
              </div>
            </div>
          </div>

            <h3>Apport du stage dans vos projets</h3>
          <div class="form-decalage-group">
            <div class="form-horizontal">
              <div class="form-group">
                <label class="col-sm-11 control-label" for="inputEnricheProjet">Precisez en quelques lignes comment le stage a enrichi ou modifié votre projet personnel et professionnel :</label>
              </div>

              <div class="form-group text-left">
                <div class="col-sm-9 col-sm-offset-1">
                    <textarea class="form-control" rows="2" name="enricheProjet" id="inputEnricheProjet"></textarea>
                </div>
              </div>
            </div>

            <div class="col-lg-12">
              <button type="submit" class="btn col-lg-2 col-lg-offset-5 col-sm-9 col-sm-offset-1 btn-primary" id="submitAvisEtudiant">Valider</button>
            </div>
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

    </div> <!-- decalage form -->
  </div>
</form>

<script src="{{asset('js/avisEtudiant.js')}}"></script>
