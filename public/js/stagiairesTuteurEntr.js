$(document).ready(function(){

  $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


  afficherDetailsEtudiant();

  $("#inputNomStagiaire").on('change', function(){
      afficherDetailsEtudiant();
  });

  $("#submitStagiaireList").on('click', function(){
      afficherDetailsEtudiant();
  });

  // Validation ou refus du stage
  $('input[name=btnStatusStage]').on('click', function(){
    changerStatusStage($(this).attr('data-status'));
  });

});

function ucfirst(texte){

  texte = texte.charAt(0).toUpperCase() + texte.substr(1).toLowerCase();

  return texte
}

// Affiche les infos du stage après requete ajax
function afficherDetailsEtudiant(){
  $.ajax({
    type: "post",
    url: "." + "/detailEtudiant",
    data: {
      id: $("#inputNomStagiaire").val(),
      date: Date().now
    }
  }).done(function(data){

    $("#panelEtudiantDetails").css({'display':'block'});

    // Affiche les details
    $("#idStage").val(data[0].idStage);
    $(".nomEtudiantDetails").text(ucfirst(data[0].nomEtudiant) + " " + ucfirst(data[0].prenomEtudiant));
    $(".emailEtudiantDetails").text(data[0].emailEtudiant);
    $(".sujetEtudiantDetails").text(data[0].sujet);

    // Gestion du status du stage
    if(data[0].tuteurValide == 0){
      $("#formValiderStage").css({'display':'block'});
        $("#statusStageDetails").removeClass('label-success');
      $("#statusStageDetails").addClass('label-warning');
      $("#statusStageDetails").text("En attente");
    }else{
      $("#formValiderStage").css({'display':'none'});
      $("#statusStageDetails").removeClass('label-warning');
      $("#statusStageDetails").addClass('label-success');
      $("#statusStageDetails").text("Validé");
    }

  }).fail(function(){
    alert('Error');
  });
}

// Valide le stage d'un étudiant
function changerStatusStage(statusStage){

  idStage = $("#idStage").val();

  $.ajax({
    type: "post",
    url: "." + "/changerStatusStage",
    data: {
      id: idStage,
      status: statusStage
    }
  }).done(function(data){
    afficherDetailsEtudiant();

    nomInputOption = $("#inputNomStagiaire option[value=" + idStage + "]").text().split("-");

    if(statusStage == 1){
      $("#inputNomStagiaire option[value=" + idStage + "]").text(nomInputOption[0] + "- Validé");
    }else{
      $("#inputNomStagiaire option[value=" + idStage + "]").text(nomInputOption[0] + "- En attente");
    }

  }).fail(function(){
    alert('Error');
  });
}
