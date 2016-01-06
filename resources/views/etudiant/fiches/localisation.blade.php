<div class="row">
  <form class="" action="" method="post" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
    <div class="col-lg-6">
      <div class="page-header">
        <h1>Entreprise</h1>
      </div>
      <div class="entreprise">

        <div class="row">
          <div class="form-group col-lg-6">
            <label for="inputNomEtablissement">Nom de l'établissement :</label>
            <input type="text" name="nomEtablissement" id="inputNomEtablissement"
              @if(old('nomEtablissement') != '')
                value="{{ old('nomEtablissement') }}"
              @elseif( isset($data['stage']) )
                value="{{ $data['stage']->nomEntreprise }}"
              @endif
              class="form-control" required>
          </div>
        </div>

        <div class="" style="margin:1%;"> </div>

        <h3>Adresse de l'établissement</h3>
        <div class="form-decalage-group">
          <div class="row">
            <div class="form-group col-lg-6">
              <label for="inputAdresseEtablissement">Numéro et nom de rue :</label>
              <input type="text" name="adresseEtablissement" id="inputAdresseEtablissement"
                @if(old('adresseEtablissement') != '')
                  value="{{ old('adresseEtablissement') }}"
                @elseif( isset($data['stage']) )
                  value="{{ $data['stage']->rueEntreprise }}"
                @endif
              class="form-control" required>
            </div>
          </div>

          <div class="row">
            <div class="form-group col-lg-6">
              <label for="inputVilleEtablissement">Ville de l'établissement :</label>
              <input type="text" name="villeEtablissement" id="inputVilleEtablissement"
              @if(old('villeEtablissement') != '')
                value="{{ old('villeEtablissement') }}"
              @elseif( isset($data['stage']) )
                value="{{ $data['stage']->villeEntreprise }}"
              @endif
              class="form-control" required>
            </div>
            <div class="form-group col-lg-3">
              <label for="inputCPEtablissement">Code postal :</label>
              <input type="text" name="cpEtablissement" id="inputCPEtablissement"
              @if(old('cpEtablissement') != '')
                value="{{ old('cpEtablissement') }}"
              @elseif( isset($data['stage']) )
                value="{{ $data['stage']->codePostalEntreprise }}"
              @endif
              class="form-control" required pattern="[0-9]{5}">
            </div>
          </div>

          <div class="row ">
            @if(isset($data['stage']->planAcces) && $data['stage']->planAcces != '')
              <div class="form-group col-lg-12">
                <label>Plan d'accès</label>
                <div class="row">
                  <div class="col-lg-5" >
                    <button type="button" class="btn btn-m btn-default" data-toggle="modal" data-target="#popupPlan">
                      Voir le plan deja envoyé
                    </button>
                  </div>
                </div>
                <div class="" style="margin:1%;"> </div>

                <div class="row">
                  <div class="col-lg-5">
                    <label for="inputPlanAcces" class="btn btn-s btn-default">En selectionner un autre</label>
                    <input type="file" name="planAcces" accept="image/*" id="inputPlanAcces" style="display:none">
                  </div>
                </div>
              </div>
              @else
              <div class="form-group col-lg-8">
                <label for="inputPlanAcces">Plan d'accès</label>
                <input type="file" name="planAcces" id="inputPlanAcces">
              </div>
              @endif
          </div>

        </div>

        <h3>Responsable</h3>
        <div class="form-decalage-group">
          <div class="row">
            <div class="form-group col-lg-3">
              <label for="inputCiviliteResponsable">Civilité :</label>
              <select class="form-control" name="civiliteReponsable" id="inputCiviliteResponsable">
                <option value="1"
                @if( isset($data['stage']) )
                  {{ $data['stage']->civilite == '1' ? 'selected' : '' }}
                @endif
                >Mr</option>
                <option value="2"
                @if( isset($data['stage']) )
                  {{ $data['stage']->civilite == '2' ? 'selected' : '' }}
                @endif
                >Mme</option>
              </select>
            </div>
            <div class="form-group col-lg-4 ">
              <label for="inputNomResponsable">Nom : </label>
              <input type="text" name="nomResponsable" id="inputNomResponsable"
              @if(old('nomResponsable') != '')
                value="{{ old('nomResponsable') }}"
              @elseif( isset($data['stage']) )
                value="{{ $data['stage']->nomTuteur }}"
              @endif
              class="form-control" required>
            </div>
            <div class="form-group col-lg-4 ">
              <label for="inputNomResponsable">Prénom : </label>
              <input type="text" name="prenomResponsable" id="inputPrenomResponsable"
              @if(old('prenomResponsable') != '')
                value="{{ old('prenomResponsable') }}"
              @elseif( isset($data['stage']) )
                value="{{ $data['stage']->prenomTuteur }}"
              @endif
              class="form-control" required>
            </div>
          </div>

          <div class="row">
            <div class="form-group col-lg-6">
              <label for="inputTelResponsable">Numéro de télephone :</label>
              <input type="text" name="telResponsable" id="inputTelResponsable"
              @if(old('telResponsable') != '')
                value="{{ old('telResponsable') }}"
              @elseif( isset($data['stage']) && $data['stage']->telPortableTuteur != "")
                value="{{ $data['stage']->telPortableTuteur }}"
              @elseif( isset($data['stage']) && $data['stage']->telTuteur != "")
                value="{{ $data['stage']->telTuteur }}"
              @endif
              class="form-control" required pattern="^0[1-8]([-. ]?[0-9]{2}){4}$">
            </div>
          </div>

          <div class="row">
            <div class="form-group col-lg-6">
              <label for="inputEmailResponsable">Email :</label>
              <input type="email" name="emailResponsable" id="inputEmailResponsable"
              @if(old('emailResponsable') != '')
                value="{{ old('emailResponsable') }}"
              @elseif( isset($data['stage']) )
                value="{{ $data['stage']->emailTuteur }}"
              @endif
              class="form-control" required>
            </div>
          </div>

          <div class="row">
            <div class="form-group col-lg-12">
              <label for="inputJourRencontre">Jours de la semaine où il est possible de le rencontrer :</label></br>

                @if( isset($data['stage']) )
                  <!-- {{ $joursDispo = $data['stage']->joursDispoRencontre }} -->
                @else
                  <!-- {{ $joursDispo = 0 }} -->
                @endif

                <label class="checkbox-inline">
                  <input type="checkbox" name="jourRencontre[]" id="inputJourRencontre" value="1" {{ ($joursDispo ) % 2 == 1 ? 'checked' : '' }}> Lundi
                </label>
                <label class="checkbox-inline">
                  <input type="checkbox" name="jourRencontre[]" id="inputJourRencontre" value="2" {{ ($joursDispo / 2 ) % 2 == 1 ? 'checked' : '' }}> Mardi
                </label>
                <label class="checkbox-inline">
                  <input type="checkbox" name="jourRencontre[]" id="inputJourRencontre" value="4" {{ ($joursDispo / 2 / 2 ) % 2 == 1 ? 'checked' : '' }}> Mercredi
                </label>
                <label class="checkbox-inline">
                  <input type="checkbox" name="jourRencontre[]" id="inputJourRencontre" value="8" {{ ($joursDispo / 2 / 2 / 2 ) % 2 == 1 ? 'checked' : '' }}> Jeudi
                </label>
                <label class="checkbox-inline">
                  <input type="checkbox" name="jourRencontre[]" id="inputJourRencontre" value="16" {{ ($joursDispo / 2 / 2 / 2 / 2) % 2 == 1 ? 'checked' : '' }}> Vendredi
                </label>
                <label class="checkbox-inline">
                  <input type="checkbox" name="jourRencontre[]" id="inputJourRencontre" value="32" {{ ($joursDispo / 2 / 2 / 2 / 2 / 2) % 2 == 1 ? 'checked' : '' }}> Samedi
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
            <input type="text" name="telEtudiantEntreprise" id="inputTelEtudiantEntreprise"
            @if(old('telEtudiantEntreprise') != '')
              value="{{ old('telEtudiantEntreprise') }}"
            @elseif( isset($data['stage']) )
              value="{{ $data['etudiant']->telEntrepriseEtudiant }}"
            @endif
            class="form-control" required pattern="^0[1-8]([-. ]?[0-9]{2}){4}$">
          </div>
        </div>

        <div class="row">
          <div class="form-group col-lg-7">
            <label for="inputTelEtudiantPortable">Numéro de télephone portable :</label>
            <input type="text" name="telEtudiantPortable" id="inputTelEtudiantPortable"
            @if(old('telEtudiantPortable') != '')
              value="{{ old('telEtudiantPortable') }}"
            @elseif( isset($data['stage']) )
              value="{{ $data['etudiant']->telPortable }}"
            @endif
            class="form-control" required pattern="^0(6|7)([-. ]?[0-9]{2}){4}$">
          </div>
        </div>

        <div class="row">
          <div class="form-group col-lg-7">
            <label for="inputEmailEtudiantPerso">Email personnel :</label>
            <input type="email" name="emailEtudiantPerso" id="inputEmailEtudiantPerso"
            @if(old('emailEtudiantPerso') != '')
              value="{{ old('emailEtudiantPerso') }}"
            @elseif( isset($data['stage']) )
              value="{{ $data['etudiant']->emailPerso }}"
            @endif
            class="form-control" required>
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
            <!-- NE SURTOUT PAS METTRE D'ESPACE ! Ils sont affichés dans la vue -->
            <textarea class="form-control" rows="2" name="sujetStage" id="inputSujetStage"
              required>@if(old('sujetStage') != ''){{ old('sujetStage') }}@elseif( isset($data['stage']) ){{ $data['stage']->sujet }}@endif</textarea>
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

    @if(session()->has('registred'))
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <div class="panel-alert-success transparent">
              <div class="alert alert-success" role="alert">
                 <div><strong>Succès.</strong> Votre fiche est bien enregistrée</div>
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

@if(isset($data['stage']->planAcces))
<!-- Plan -->
<div class="modal fade" id="popupPlan" tabindex="-1" role="dialog" aria-labelledby="visualisationDuPlan">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="visualisationDuPlan">Plan Accés</h4>
      </div>
      <div class="modal-body">
        <!-- <img src="http://127.0.0.1/Web/projet/public/uploads/plan/0dddfad9ac0dfe36251d69f4317c36d8" alt="" /> -->
        <object data="{{asset('uploads/plan')}}/{{$data['stage']->planAcces}}" width="100%" height="100%">
                 Plan : <a href="{{asset('uploads/plan')}}/{{$data['stage']->planAcces}}">planAcces.pdf</a>
        </object>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@endif

<script src="{{asset('js/localisation.js')}}"></script>
