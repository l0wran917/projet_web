@include('template.head')

  <link type="text/css" rel="stylesheet" href="{{asset('style/dashboard.css')}}">

  @if( Session::get('typeUtilisateur') == 1)
    @include('etudiant.dashboard')
  @elseif( Session::get('typeUtilisateur') == 2)
    @include('tuteurEntreprise.dashboard')
  @endif

@include('template.foot')
