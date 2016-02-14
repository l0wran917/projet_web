@include('template.head')

<div class="row">
  <div class="col-xs-12">
    <div class="page-header">
      <h1>Disponibilités soutenance</h1>
    </div>
  </div>
</div>

<form method="post">
  <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

  <div class="row">
    <div class="col-lg-offset-2 col-lg-3">

      <div class="panel panel-default">
        <div class="panel-heading text-center">
          {{$data['date'][0]}}
        </div>
        <div class="panel-body">

            @for ($i = $data['heureDebut'][0]; $i < $data['heureFin'][0]; $i += $data['dureeCreneau'][0])
            <div class="input-group">
              <span class="input-group-addon">
                <input type="checkbox" name="creneaux0[]" value="{{$i}}" id="creneau0-{{$i}}"
                  aria-label="Debut : {{$i/60}} et durée : {{$data['dureeCreneau'][0]}}"
                  {{ in_array($i, $data['dispo'][0]) ? 'checked' : '' }}>
              </span>
              <p class="form-control-static">
                <label for="creneau0-{{$i}}" style="width:100%;">
                  <!-- {{ $minute = (($i/60) - floor($i/60)) * 60}} -->
                  <!-- {{ $minute < 10 ? $minute = "0$minute" : '' }}  -->
                  <!-- {{ $minute == 0 ? $minute = '00' : '' }} -->
                  {{intval($i/60)}}h{{ $minute == 0 ? '00' : $minute }}
                  </br>
                  <!-- {{ $minute = ((($i + $data['dureeCreneau'][0])/60) - floor(($i + $data['dureeCreneau'][0])/60)) * 60}} -->
                  <!-- {{ $minute = floor($minute) }} Bug des fois genre 18h04.999999-->
                  <!-- {{ $minute < 10 ? $minute = "0$minute" : '' }}  -->
                  <!-- {{ $minute == 0 ? $minute = '00' : '' }} -->
                  {{intval(($i + $data['dureeCreneau'][0])/60)}}h{{$minute}}
                </label>
              </p>
            </div>
            <div class="page-header"></div>
            @endfor

        </div>
      </div>

    </div>
    <div class="col-lg-offset-2 col-lg-3">

      <div class="panel panel-default">
        <div class="panel-heading text-center">
          {{$data['date'][1]}}
        </div>
        <div class="panel-body">
          @for ($i = $data['heureDebut'][1]; $i < $data['heureFin'][1]; $i += $data['dureeCreneau'][1])
          <div class="input-group">
            <span class="input-group-addon">
              <input type="checkbox" name="creneaux1[]" value="{{$i}}" id="creneau1-{{$i}}"
                aria-label="Debut : {{$i/60}} et durée : {{$data['dureeCreneau'][1]}}"
                {{ in_array($i, $data['dispo'][1]) ? 'checked' : '' }}>
            </span>
            <p class="form-control-static">
              <label for="creneau1-{{$i}}" style="width:100%;">
                <!-- {{ $minute = (($i/60) - floor($i/60)) * 60}} -->
                <!-- {{ $minute < 10 ? $minute = "0$minute" : '' }}  -->
                <!-- {{ $minute == 0 ? $minute = '00' : '' }} -->
                {{intval($i/60)}}h{{ $minute == 0 ? '00' : $minute }}
                </br>
                <!-- {{ $minute = ((($i + $data['dureeCreneau'][1])/60) - floor(($i + $data['dureeCreneau'][1])/60)) * 60}} -->
                <!-- {{ $minute = floor($minute) }} Bug des fois genre 18h04.999999-->
                <!-- {{ $minute < 10 ? $minute = "0$minute" : '' }}  -->
                <!-- {{ $minute == 0 ? $minute = '00' : '' }} -->
                {{intval(($i + $data['dureeCreneau'][1])/60)}}h{{$minute}}
              </label>
            </p>
          </div>
          <div class="page-header"></div>
          @endfor
        </div>
      </div>

    </div>
  </div>

  <div class="row">
    <div class="col-xs-4 col-xs-offset-4">
      <input type="submit" name="name" value="Valider" class="form-control btn btn-primary">
    </div>
  </div>
</form>

  @if(session()->has('registred'))
    <div class="row" style="margin-top:2%;">
      <div class="col-lg-6 col-lg-offset-3">
        <div class="panel-alert-success transparent">
          <div class="alert alert-success" role="alert">
             <div><strong>Succès.</strong> Votre fiche est bien enregistrée</div>
          </div>
        </div>
      </div>
    </div>
  @endif

<link type="text/css" rel="stylesheet" href="{{asset('style/soutenance.css')}}">

@include('template.foot')
