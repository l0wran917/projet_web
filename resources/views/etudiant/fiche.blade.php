@include('template.head')

  <link type="text/css" rel="stylesheet" href="{{asset('style/etudiantFiche.css')}}">

  @if($id == 1)
    @include('etudiant.fiches.localisation')
  @elseif($id == 2)
    @include('etudiant.fiches.avisEtudiant')
  @elseif($id == 3)
    @include('tuteurEntreprise.fiches.appreciation')
  @else
      Error.
  @endif

@include('template.foot')
