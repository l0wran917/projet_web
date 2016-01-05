$("document").ready(function(){

  $("input:radio").on('change', function(){
    $('input[type="submit"]').prop('disabled', false);
  });

});
