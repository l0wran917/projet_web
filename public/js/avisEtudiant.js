$(document).ready(function(){


    inputDisplaySmtg = $("[data-id-display!=''][data-id-display]");

    for (i=0; i < inputDisplaySmtg.length; i++) {
      displayWithChecked(inputDisplaySmtg[i]);
    }

    inputHideSmtg = $("[data-id-hide!=''][data-id-hide]");

    for (i=0; i < inputDisplaySmtg.length; i++) {
      hideWithChecked(inputHideSmtg[i]);
    }

});

function displayWithChecked(input){
  // Si il est checked, on affiche le div caché
  if($(input).is(':checked')){
    $("#"+$(input).attr('data-id-display')).css({'display':'block'});
  }

  // Si on change le check
  $(input).on('change', function(e) {
    if($(input).is(':checked')){
      // pour le check, on affiche div
      $("#"+$(input).attr('data-id-display')).css({'display':'block'});
    }else{
      // si on le decoche, on cache div et reset valeur
      $("#"+$(input).attr('data-id-display')).css({'display':'none'});
      $("#"+$(input).attr('data-id-display')).val('');
    }
  });

}
function hideWithChecked(input){
  // Si il est checked, on affiche le div caché
  if($(input).is(':checked')){
    $("#"+$(input).attr('data-id-hide')).css({'display':'none'});
  }

  // Si on change le check
  $(input).on('change', function(e) {
    if($(input).is(':checked')){
      // pour le check, on affiche div
      $("#"+$(input).attr('data-id-hide')).css({'display':'none'});
    }
  });

}
