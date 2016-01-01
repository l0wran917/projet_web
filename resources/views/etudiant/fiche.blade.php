@include('template.head')

  <link type="text/css" rel="stylesheet" href="{{asset('style/etudiantFiche.css')}}">

  @if($id == 1)
    @include('etudiant.fiches.localisation')
  @else
      Error.
  @endif

@include('template.foot')
