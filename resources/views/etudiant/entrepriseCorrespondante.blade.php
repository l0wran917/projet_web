@include('template.head')
  <link type="text/css" rel="stylesheet" href="{{asset('style/entrepriseCorrespondante.css')}}">

  <div class="col-lg-offset-2 col-lg-8">
    <div class="panel panel-default">
      <div class="panel-heading">Entreprises correspondantes</div>
      <div class="panel-body recapitulatif">
        <p>
          Une ou plusieurs entreprises correspondent potentiellement à votre saisie.</br>
          Selectionnez dans la liste votre entreprise, ou la dernière option si aucune ne correspond.
        </p>
        <form action="{{ route('ficheEtudiantLocalisationEntrepriseCorresp', ['id' => $id]) }}" method="post">
          <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

          @foreach($entreprises as $key => $entreprise)
            <!-- {{ $key+1 }} : {{ $entreprise }} -->
            <div class="page-header"></div>
            <div class="input-group">
              <span class="input-group-addon">
                <input type="radio" name="inputCorrespondante" value="{{ $key+1 }}" id="entrepriseCorrespondante{{ $key+1 }}"
                  aria-label="{{ $entreprise->nom }}. {{ $entreprise->rue }}. {{ $entreprise->cp }}. {{ $entreprise->ville }}">
              </span>
              <p class="form-control-static">
                <label for="entrepriseCorrespondante{{ $key+1 }}">
                  {{ $entreprise->nom }}</br>
                  {{ $entreprise->rue }}</br>
                  {{ $entreprise->cp }} - {{ $entreprise->ville }}
                </label>
              </p>
            </div>
          @endforeach

          <div class="page-header"></div>
          <div class="input-group">
            <span class="input-group-addon">
              <input type="radio" name="inputCorrespondante" value="0" id="entrepriseCorrespondante0"
                aria-label="Aucune des ces entreprises.">
            </span>
            <p class="form-control-static">
              <label for="entrepriseCorrespondante0">
                Aucune des ces entreprises.
              </label>
            </p>
          </div>

          <input type="submit" name="name" class="btn btn-primary col-xs-8 col-xs-offset-2" value="Valider">

        </form>

      </div>
    </div>
  </div>

@include('template.foot')
