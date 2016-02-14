<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link type="text/css" rel="stylesheet" href="{{asset('style/bootstrap.min.css')}}">
        <link type="text/css" rel="stylesheet" href="{{asset('style/desktop.css')}}">
        <link type="text/css" rel="stylesheet" href="{{asset('style/entrepriseCorrespondante.css')}}">
        <script src="{{asset('js/jquery/jquery.1.11.3.min.js')}}"></script>
        <script src="{{asset('js/bootstrap/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/inputCorrespondant.js')}}"></script>

    </head>
    <body>

          <div class="container">
            <div class="row">
              <div class="col-xs-10 col-xs-offset-1 text-center">
                <h1>Gestion des stages</h1>
                <h3>Université Paris Sud</h3>
              </div>
            </div>
            <div class="row" >
              <div class="col-md-6 col-md-offset-3 signup">

                <div class="panel panel-default">
                  <div class="panel-heading text-center">
                      Entreprises correspondantes
                  </div>
                  <div class="panel-body">
                    <p>
                      Une ou plusieurs entreprises correspondent potentiellement à votre saisie.</br>
                      Selectionnez dans la liste votre entreprise, ou la dernière option si aucune ne correspond.
                    </p>
                    <form action="{{ route('signupEtapeCorrespondantPost', ['etape' => '4', 'correspondant' => 'entreprise']) }}" method="post">
                      <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

                      @foreach(session('entreprises') as $key => $entreprise)
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

                      <input type="submit" name="name" class="btn btn-primary col-xs-8 col-xs-offset-2" value="Valider" disabled>

                    </form>
                  </div>
                </div>

              </div>
            </div>
          </div>
    </body>
</html>
