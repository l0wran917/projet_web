@include('template.head')

  <link type="text/css" rel="stylesheet" href="{{asset('style/tuteurEntrFiche.css')}}">

  @if($id == 1)
    @include('tuteurEnseignant.fiches.compteRendu')
  @elseif($id == 2)
    @include('tuteurEnseignant.fiches.appariement')
  @else
      Error.
  @endif

@include('template.foot')
