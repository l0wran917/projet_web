<!-- {{{ !isset($id) ? $id = 0 : ''}}} -->

<!--  Bouton du menu -->
<a href="{{ route('dashboard') }}">
  <div class="row btn-menu {{{ $id == 0 ? 'active' : ''}}}">
    <div class="col-xs-12">
      <span class="glyphicon glyphicon-dashboard" aria-hidden="true"></span> Dashboard
    </div>
  </div>
</a>

<a href="{{ route('ficheTuteurEntre', ['id' => 1]) }}">
  <div class="row btn-menu {{{ $id == 1 ? 'active' : ''}}}">
    <div class="col-xs-12">
      <span class="glyphicon glyphicon-user" aria-hidden="true"></span>Mes stagiaires <!-- <span class="badge">2</span> -->
    </div>
  </div>
</a>

<a href="{{ route('ficheTuteurEntre', ['id' => 2]) }}">
  <div class="row btn-menu {{{ $id == 2 ? 'active' : ''}}}">
    <div class="col-xs-12">
      <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>Fiche d'appreciation du stagiaire
    </div>
  </div>
</a>
<!--
<a href="{{ route('ficheTuteurEntre', ['id' => 3]) }}">
  <div class="row btn-menu {{{ $id == 3 ? 'active' : ''}}}">
    <div class="col-xs-12">
      <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>Compte Rendu de la visite
    </div>
  </div>
</a>
-->
<a href="{{ route('ficheTuteurEntre', ['id' => 4]) }}">
  <div class="row btn-menu {{{ $id == 4 ? 'active' : ''}}}">
    <div class="col-xs-12">
      <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>Soutenance
    </div>
  </div>
</a>

<a href="{{ route('logout') }}">
  <div class="row btn-menu">
    <div class="col-xs-12">
      <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>Deconnexion
    </div>
  </div>
</a>


<div class="footer">
  <div class="row" id="zoneProgressBarTotal">
    <div class="col-xs-8 col-xs-offset-2" >
    <div class="col-xs-8 col-xs-offset-2" >
      <div class='box' id="progressBarTotal">
        <div class='content'>

          <div id="cont" data-pct="0">
            <svg id="svg" viewBox="0 0 200 200" preserveAspectRatio="xMinYMin slice" version="1.1" xmlns="http://www.w3.org/2000/svg">

              <text id="perc" x="60" y="115" fill="currentColor" stroke="transparent" font-size="50">0%</text>
              <circle r="90" cx="100" cy="100" fill="transparent" stroke-dasharray="565.48" stroke-dashoffset="0"></circle>
              <circle id="bar" r="90" cx="100" cy="100" fill="transparent" stroke-dasharray="565.48" stroke-dashoffset="0" transform="rotate(-90 100 100)"></circle>
            </svg>
          </div>

        </div>
      </div>
    </div>
    </div>
  </div>
</div>
