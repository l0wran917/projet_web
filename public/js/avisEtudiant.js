$(document).ready(function(){

  if($('#inputRemunerationOui').is(':checked')){
    $("#inputMontantRemuneration").css({'display':'block'});
  }

  $('.inputRemuneration').on('change', function(e) {
    if($("#inputRemunerationOui").is(':checked')){
      $("#inputMontantRemuneration").css({'display':'block'});
    }else{
      $("#inputMontantRemuneration").css({'display':'none'});
      $("#inputMontantRemuneration").val('');
    }
  });


});
