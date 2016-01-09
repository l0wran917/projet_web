$(document).ready(function(){

  $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

  $("#submitStagiaireList").on('click', function(){
    $.ajax({
      type: "post",
      url: "." + "/listeEtudiant",
      data: {
        id: $("#inputNomStagiaire").val()
      }
    }).done(function(data){
      alert('success');
      console.log(data);

      

    }).fail(function(){
      alert('Error');
    });
  });

});
