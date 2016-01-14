<!-- {{{ !isset($id) ? $id = 0 : ''}}} -->


<a href="{{ route('dashboard') }}">
  <div class="row btn-menu {{{ $id == 0 ? 'active' : ''}}}">
    <div class="col-xs-12">
      <span class="glyphicon glyphicon-dashboard" aria-hidden="true"></span> Dashboard
    </div>
  </div>
</a>

<a href="{{ route('ficheTuteurEns', ['id' => 1]) }}">
  <div class="row btn-menu {{{ $id == 1 ? 'active' : ''}}}">
    <div class="col-xs-12">
      <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>Compte Rendu de visite
    </div>
  </div>
</a>

<a href="{{ route('ficheTuteurEns', ['id' => 2]) }}">
  <div class="row btn-menu {{{ $id == 2 ? 'active' : ''}}}">
    <div class="col-xs-12">
      <span class="glyphicon glyphicon-user" aria-hidden="true"></span>Demande d'appariement
    </div>
  </div>
</a>

<a href="{{ route('ficheTuteurEns', ['id' => 5]) }}">
  <div class="row btn-menu {{{ $id == 3 ? 'active' : ''}}}">
    <div class="col-xs-12">
      <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>Soutenance
    </div>
  </div>
</a>
