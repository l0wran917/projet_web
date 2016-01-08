@include('template.head')

  <link type="text/css" rel="stylesheet" href="{{asset('style/tuteurEntrFiche.css')}}">

  @if($id == 1)
    @include('tuteurEntreprise.fiches.stagiaires')
  @elseif($id == 2)
    @include('tuteurEntreprise.fiches.appreciation')
  @else
      Error.
  @endif

@include('template.foot')
