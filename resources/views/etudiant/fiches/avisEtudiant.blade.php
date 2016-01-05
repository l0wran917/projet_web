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
            <div class="form-group">
              <label class="col-sm-5 control-label">Votre stage a-t-il été rémunéré ?</label>
              <div class="col-sm-2">
                <label class="radio-inline">
                  <input type="radio" name="remenerationStage" class="inputRemuneration" value="0"> Non
                </label>
              </div>
              <div class="col-sm-2">
                <label class="radio-inline">
                  <input type="radio" name="remenerationStage" class="inputRemuneration" id="inputRemunerationOui" value="1"> Oui
                </label>
              </div>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="montantRemuneration" id="inputMontantRemuneration" style="display:none" placeholder="Combien ?">
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
                <label class="radio-inline">
                  <input type="radio" name="encadrageInfomaticien" class="inputRemuneration" value="0"> Oui
                </label>
              </div>
              <div class="col-sm-2">
                <label class="radio-inline">
                  <input type="radio" name="encadrageInfomaticien" class="inputRemuneration" id="inputRemunerationOui" value="1"> Non
                </label>
              </div>
            </div>
          </div>

          <div class="form-horizontal">
            <div class="form-group text-left">
              <label class="col-sm-7 control-label">Pouviez-vous faire appel à un informaticien ?</label>
              <div class="col-sm-2">
                <label class="radio-inline">
                  <input type="radio" name="appelInformaticien" class="inputRemuneration" value="0"> Oui
                </label>
              </div>
              <div class="col-sm-2">
                <label class="radio-inline">
                  <input type="radio" name="appelInformaticien" class="inputRemuneration" id="inputRemunerationOui" value="1"> Non
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
                <label class="radio-inline">
                  <input type="radio" name="travailSeul" class="inputRemuneration" value="0"> Oui
                </label>
              </div>
              <div class="col-sm-2">
                <label class="radio-inline">
                  <input type="radio" name="travailSeul" class="inputRemuneration" id="inputRemunerationOui" value="1"> Non
                </label>
              </div>
            </div>
          </div>

          <div class="form-horizontal">
            <div class="form-group text-left">
              <label class="col-sm-3 control-label" style="text-align:right !important;">Taille de l'equipe  :</label>
              <div class="col-sm-3">
                  <input type="text" name="tailleEquipe" class="form-control" value="0">
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
            <div class="form-group text-left">
              <label class="col-sm-3 control-label">Type de matériel :</label>
              <div class="col-sm-1">
                <label class="radio-inline">
                  <input type="radio" name="typeMateriel" class="inputRemuneration" value="0"> PC
                </label>
              </div>
              <div class="col-sm-5">
                <div class="form-horizontal">
                  <div class="form-group text-left">
                    <label class="col-sm-3 control-label" style="text-align:right !important;">Autres :</label>
                    <div class="col-sm-8">
                        <input type="text" name="typeMateriel" class="form-control" value="0">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="form-horizontal">
            <div class="form-group text-left">

              <label class="col-sm-2 control-label">Système :</label>
              <div class="col-sm-2">
                <label class="radio-inline">
                  <input type="checkbox" name="typeSysteme[]" class="inputRemuneration" value="0"> Unix
                </label>
              </div>
              <div class="col-sm-2">
                <label class="radio-inline">
                  <input type="checkbox" name="typeSysteme[]" class="inputRemuneration" value="0"> Linux
                </label>
              </div>
              <div class="col-sm-2">
                <label class="radio-inline">
                  <input type="checkbox" name="typeSysteme[]" class="inputRemuneration" value="0"> NT
                </label>
              </div>
              <div class="col-sm-2">
                <label class="radio-inline">
                  <input type="checkbox" name="typeSysteme[]" class="inputRemuneration" value="0"> Windows
                </label>
              </div>

            </div>
          </div>

          <div class="form-horizontal">
            <div class="form-group text-left">
              <label class="col-sm-1 col-sm-offset-2 control-label">Autres :</label>
              <div class="col-sm-3">
                  <input type="text" name="autreSysteme" class="form-control" value="0">
              </div>
            </div>
          </div>

          <div class="form-horizontal">
            <div class="form-group text-left">
              <label class="col-sm-2 control-label">Langages : <small>(Separés par une virgule)</small></label>
              <div class="col-sm-9">
                  <textarea class="form-control" rows="2" name="sujetStage" id="inputSujetStage"></textarea>
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
                  <input type="checkbox" name="objetStage[]" class="inputRemuneration" value="0"> Système
                </label>
              </div>
              <div class="col-sm-3">
                <label class="radio-inline">
                  <input type="checkbox" name="objetStage[]" class="inputRemuneration" value="0"> Multimédia
                </label>
              </div>
              <div class="col-sm-3">
                <label class="radio-inline">
                  <input type="checkbox" name="objetStage[]" class="inputRemuneration" value="0"> Réseaux
                </label>
              </div>
              <div class="col-sm-3">
                <label class="radio-inline">
                  <input type="checkbox" name="objetStage[]" class="inputRemuneration" value="0"> Dév Web
                </label>
              </div>

            </div>

            <div class="row">

              <div class="col-sm-3">
                <label class="radio-inline">
                  <input type="checkbox" name="objetStage[]" class="inputRemuneration" value="0"> Autres dév
                </label>
              </div>
              <div class="col-sm-4">
                <label class="radio-inline">
                  <input type="checkbox" name="objetStage[]" class="inputRemuneration" value="0"> Bases de données
                </label>
              </div>

            </div>

            <div class="row" style="margin-top:1%;">
              <div class="form-horizontal">
                <div class="form-group text-left">
                  <label class="col-sm-1 col-sm-offset-1 control-label">Autres :</label>
                  <div class="col-sm-3">
                      <input type="text" name="inlineRadioOptions" class="form-control input-sm" value="0">
                  </div>
                </div>
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
    <div class="form-decalage-group">

      <div class="row">
        <div class="col-lg-12">
          <div class="form-horizontal">
            <div class="form-group">
              <label class="col-sm-7 control-label">Etes vous totalement satisfait des conditions dans lesqelles ce sont déroulées votre stage ?</label>
              <div class="col-sm-2">
                <label class="radio-inline">
                  <input type="radio" name="inlineRadioOptions" class="inputRemuneration" value="1"> Oui
                </label>
              </div>
              <div class="col-sm-2">
                <label class="radio-inline">
                  <input type="radio" name="inlineRadioOptions" class="inputRemuneration" id="inputRemunerationOui" value="0"> Non
                </label>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

  </div>
</div>


<script src="{{asset('js/avisEtudiant.js')}}"></script>
