@include('template.head')

  <link type="text/css" rel="stylesheet" href="{{asset('style/dashboard.css')}}">

  @if( Session::get('typeUtilisateur') == 1)
    @include('dashboard.etudiant')
  @endif

@include('template.foot')
