$(window).load(function(){

  $(".login #nextLogin").on("click", nextSubmit);

  $(".login .iconPrevious").on("click", previousSubmit);

});


function nextSubmit(){

  var mail = $("#inputEmail").val();
  var prenomDotNom = mail.split("@")[0];

  if (mail.split("@")[1]=="u-psud.fr" && prenomDotNom.indexOf(".")!=-1){
    var prenom = prenomDotNom.split(".")[0];
    var nom = prenomDotNom.split(".")[1];
    prenom = prenom[0].toUpperCase() + prenom.slice(1);
    nom = nom[0].toUpperCase() + nom.slice(1);

    $(".login .first-panel").css({
      'transition': '100ms linear',
      'transform': 'translate(-150%, 0)'
    });

    $(".login .second-panel").css({
      'transition': '100ms linear',
      'transform': 'translate(0%, -100%)'
    });

    $(".login .iconPrevious").css({
      'display' : 'block'
    });

    $('.login .prenom').text(prenom);
    $('.login .nom').text(nom);

  }
}

function previousSubmit(){

  $(".login .first-panel").css({
    'transition': '100ms linear',
    'transform': 'translate(0%, 0)'
  });

  $(".login .second-panel").css({
    'transition': '100ms linear',
    'transform': 'translate(100%, -100%)'
  });

  $(".login .iconPrevious").css({
    'display' : 'none'
  });

  $('.login .prenom').text("");
  $('.login .nom').text("");

}
