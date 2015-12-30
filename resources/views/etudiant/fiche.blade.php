<!DOCTYPE html>
<html>
    <head>
        <title>Dashboard</title>

        <link type="text/css" rel="stylesheet" href="{{asset('style/bootstrap.min.css')}}">
        <link type="text/css" rel="stylesheet" href="{{asset('style/leftPanel.css')}}">
        <link type="text/css" rel="stylesheet" href="{{asset('style/etudiantFiche.css')}}">
        <script src="{{asset('js/jquery/jquery.1.11.3.min.js')}}"></script>
        <script src="{{asset('js/bootstrap/bootstrap.min.js')}}"></script>


    </head>
    <body>
      <div class="container-fluid">
        @include('dashboard.leftPanel')
        <div class="row">
          <div class="col-xs-9 col-xs-offset-3" id="panel">
            <p>
              @if($id == 1)
                @include('etudiant.fiches.localisation')
              @else
                  Error.
              @endif
            </p>
          </div>
        </div>
      </div>
    </body>
</html>
