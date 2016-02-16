$(window).load(function(){

  $(".login #nextLogin").on("click", nextSubmit);

  $(".login .iconPrevious").on("click", previousSubmit);

  $("#inputEmail").on('keyup keypress', function(event){
    if(event.keyCode == 13){
      $("#nextLogin").click();
    }
  });

  $("#inputPassword").keyup(function(event){
    if(event.keyCode == 13 && $("#inputPassword").val().length != 0){
        $(".login form").submit();
    }
  });

  $("#submitLogin").click(function(){
    $(".login form").submit();
  });

});


function nextSubmit(){

  var mail = $("#inputEmail").val();
  var prenomDotNom = mail.split("@")[0];

  // Adresse mail upsud
  if (mail.split("@")[1]=="u-psud.fr" && prenomDotNom.indexOf(".")!=-1){
    var prenom = prenomDotNom.split(".")[0];
    var nom = prenomDotNom.split(".")[1];
    prenom = prenom[0].toUpperCase() + prenom.slice(1).toLowerCase();
    nom = nom[0].toUpperCase() + nom.slice(1).toLowerCase();
    lienImg = "img/etudiants/" + prenom.toLowerCase() + "." + nom.toLowerCase() + ".jpg";
  } else {
    prenom = mail;
    nom = "";
    lienImg = "img/testImg.png";
  }

  $(".panel-alert").css({
    'max-height':'0px',
    'display':'none'
  })

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

  $(".personalPicture img").focus();
  $("#inputEmail").blur();
  $("#inputPassword").val("");

  $(".personalPicture img").attr("src", lienImg)

  $('.login .prenom').text(prenom);
  $('.login .nom').text(nom);
/*
  if (mail.split("@")[1]=="u-psud.fr" && prenomDotNom.indexOf(".")!=-1){
    var prenom = prenomDotNom.split(".")[0];
    var nom = prenomDotNom.split(".")[1];
    prenom = prenom[0].toUpperCase() + prenom.slice(1).toLowerCase();
    nom = nom[0].toUpperCase() + nom.slice(1).toLowerCase();
    lienImg = "img/etudiants/" + prenom.toLowerCase() + "." + nom.toLowerCase() + ".jpg";

    $(".panel-alert").css({
      'max-height':'0px',
      'display':'none'
    })

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

    // $("#inputPassword").focus();
    $("#inputEmail").blur();
    $("#inputPassword").val("");

    $(".personalPicture img").attr("src", lienImg)

    $('.login .prenom').text(prenom);
    $('.login .nom').text(nom);

  }else{

    $(".panel-success.transparent").css({
      'display':'none',
      'max-height':'0px',
      'padding-top':'0px'
    })

    $(".panel-alert.transparent").css({
      'display':'block',
      'max-height':'500px',
      'padding-top':'10px'
    })

    $(".panel").css({
      'height':'475px'
    });
  }
  */
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

  $("#inputEmail").focus();

  $(".personalPicture img").attr("src", "img/testImg.png")


  $('.login .prenom').text("");
  $('.login .nom').text("");

}

function alertWrongPassword(){

  $(".panel-alert.transparent").css({
    'display':'block',
    'max-height':'500px',
    'padding-top':'10px'
  })

  $(".panel").css({
    'height':'475px'
  });
}

function alertSignupCompleted(){
  $(".panel-success.transparent").css({
    'display':'block',
    'max-height':'500px',
    'padding-top':'10px'
  })

  $(".panel").css({
    'height':'475px'
  });
}
