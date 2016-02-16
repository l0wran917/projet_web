<!DOCTYPE html>
<html>
    <head>
        <title>Deconnexion</title>

        <link type="text/css" rel="stylesheet" href="{{asset('style/bootstrap.min.css')}}">
        <link type="text/css" rel="stylesheet" href="{{asset('style/desktop.css')}}">
        <script src="{{asset('js/jquery/jquery.1.11.3.min.js')}}"></script>
        <script src="{{asset('js/bootstrap/bootstrap.min.js')}}"></script>

    </head>
    <body>

          <div class="container">
            <div class="row">
              <div class="col-xs-10 col-xs-offset-1 text-center">
                <h1>Deconnexion ...</h1>
                <?php
                  header("Refresh: 1; url=".route('login'));
                ?>
              </div>
            </div>
          </div>
    </body>
</html>
