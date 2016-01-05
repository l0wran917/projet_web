<div class="row">
  <div class="col-xs-3" id="dashboard-menu">

    <!-- Info utilisateur -->
    <div class="row" id="infoUser">
        <div class="col-lg-5" id="personalPicture">
          <div class="image" style="background-image: url('{{ asset('img/etudiants/')}}/{{ session('prenom') }}.{{ session('nom') }}.jpg');">
          </div>
          <!-- <img src="img/etudiants/laurent.bassin.jpg" alt="Photo de l'etudiant" /> -->
          <!-- <img src="http://lorempixel.com/120/120" alt="Photo de l'etudiant" /> -->
        </div>
        <div class="col-lg-7 details">
          <p>
            <span class="nomPrenom">{{ ucfirst(session('nom')) }} {{ ucfirst(session('prenom')) }}</span>
            <span class="email">{{ session('email') }}</span>
          </p>
        </div>
    </div>

    @if( Session::get('typeUtilisateur') == 1)
      @include('etudiant.menuEtudiant')
    @endif

  </div>
</div>

<script src="{{asset('js/dashboard.js')}}"></script>
