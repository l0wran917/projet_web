
$('#submitLocalisation').on('click', function(e) {
  e.preventDefault();

  $.get('{!! url('dashboard/etudiant/fiche/1') !!}', function(data) {
      if(data.response == 'logout') {
          $('ul.nav').addClass('hidden');
          $('form#log').removeClass('hidden');
          $('form#del').addClass('hidden');
      }
  });

});
