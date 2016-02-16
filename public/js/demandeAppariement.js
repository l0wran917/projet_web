$(document).ready(function(){

  $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

  afficherDetailsEtudiant();

  $("#inputIdEtudiant").on('change', function(){
      afficherDetailsEtudiant();
  });

  $("#submitGetDetailsEtudiant").on('click', function(){
      afficherDetailsEtudiant();
  });

  // Validation ou refus du stage
  $('input[name=btnStatusStage]').on('click', function(){
    changerStatusStage($(this).attr('data-status'));
  });

});


// Affiche les infos du stage après requete ajax
function afficherDetailsEtudiant(){
  $.ajax({
    type: "post",
    url: $("#submitGetDetailsEtudiant").attr('data-route-details'),
    data: {
      idEtudiant: $("#inputIdEtudiant").val(),
      date: Date().now
    }
  }).done(function(data){

    $("#panelEtudiantDetails").css({'display':'block'});

    // Affiche les details
    $("#idEtudiant").val(data.etudiant.idEtudiant);
    $(".nomEtudiantDetails").text(ucfirst(data.etudiant.nom)+ " " + ucfirst(data.etudiant.prenom));
    $(".emailEtudiantDetails").text(data.etudiant.email);
    $(".sujetEtudiantDetails").text(data.stage.sujet);
    if(data.tuteur.nomTuteur !== undefined){
      $(".tuteurEntrepriseDetails").text(ucfirst(data.tuteur.nomTuteur)+ " " + ucfirst(data.tuteur.prenomTuteur));
    }
    $(".entrepriseEtudiantDetails").text(data.entreprise.nom);

  }).fail(function(){
    alert('Error');
  });
}

function ucfirst(texte){
  if(texte != null){
    texte = texte.charAt(0).toUpperCase() + texte.substr(1).toLowerCase();
  }

  return texte
}
