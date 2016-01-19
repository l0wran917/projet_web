<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link type="text/css" rel="stylesheet" href="{{asset('style/bootstrap.min.css')}}">
        <link type="text/css" rel="stylesheet" href="{{asset('style/desktop.css')}}">
        <script src="{{asset('js/jquery/jquery.1.11.3.min.js')}}"></script>
        <script src="{{asset('js/bootstrap/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/login.js')}}"></script>

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
                    DUT Informatique
                  </div>
                  <div class="panel-body">
                    @if($etape == 1)
                      @include('signup.demandeCle')
                    @else
                      Error.
                    @endif
                  </div>
                </div>
              </div>
            </div>
          </div>
    </body>
</html>
