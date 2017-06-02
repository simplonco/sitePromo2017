//by <==Atax==>
//===============================================
$( document ).ready(function(){
console.log( "ready!" );
//function qui ecrit les valeurs dans la page d'apres le JSON
function addToPage(myListe, id){
  $.getJSON( "assets/json/"+urlListe+".json", function() {
  //test de la connection au JSON===============
    console.log( "success" );
  })
  .done(function(data) {
    console.log( "second success" );
    //en cas de reussite (.done)lecture du JSON
    // et on lit grace a un foreach le json====
    $.each( data, function( key, val ) {
      if (key === urlId) {
        jsonTitre = val["titre"];
        jsonZone = val["zone"];
        jsonImage = val["image"];
        jsonImage_p = val["image_p"];
        //jsonTexte = val["texte"];
        //jsonTexte_p = val["texte_p"];
        if (jsonZone === "pied") {
          $(".titre").append(jsonTitre);
          $(".imgDiv").append("<img src='assets/img/photos_methode/"+jsonImage_p+".jpg' class='imgMethode' alt='image "+jsonTitre+"'>");
          //$(".descriptionMassage").append("jsonTexte_p");
        }else{
          //on remplit la page main=====================
          $(".titre").append(jsonTitre);
          $(".imgDiv").append("<img src='assets/img/photos_methode/"+jsonImage+".jpg' class='imgMethode' alt='image "+jsonTitre+"'>");
          //$(".descriptionMassage").append("jsonTexte");
        }
        //penszr a ajouter texte et texte_p plus tard
        currentJson = [jsonImage, jsonImage_p];
      };
    //fin du each
    });
  //fin du done
})
  //cas d'erreur de l'acces au JSON============
  .fail(function() {
    console.log( "error" );
  })
// fin de la fonction addtopage=================
};
function ongletAdd(Liste, id, zone){
  $.getJSON( "assets/json/"+urlListe+".json", function() {
    console.log( "success" );
  })
  .done(function(data) {
    console.log( "second success" );
    $.each( data, function( key, val ) {
      if (key === urlId) {
        jsonTitre = val["titre"];
        jsonImage = val["image"];
        jsonImage_p = val["image_p"];
        //jsonTexte = val["texte"];
        //jsonTexte_p = val["texte_p"];
        if (zone === "pied") {
          $(".imgDiv").html("");
          $(".imgDiv").append("<img src='assets/img/photos_methode/"+jsonImage_p+".jpg' class='imgMethode' alt='image "+jsonTitre+"'>");
          //ajouter texte_p
        }else{
          $(".imgDiv").html("");
          $(".imgDiv").append("<img src='assets/img/photos_methode/"+jsonImage+".jpg' class='imgMethode' alt='image "+jsonTitre+"'>");
          //ajouter texte
        };
        //fin du if
      }
    //fin du each
    });
  //fin du done
})
  //cas d'erreur de l'acces au JSON============
  .fail(function() {
    console.log( "error" );
  })
// fin de la fonction addtopage=================
};
//recup des valeurs dans l'url================================================================================
$.urlParam = function(name){
	var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
	return results[1] || 0;
}
// recup de l'id et de la liste JSON============
var urlId = $.urlParam('id');
var urlListe = $.urlParam('list');
var urlZone = $.urlParam('zone');
//lancement du remplissage======================
var currentJson;
addToPage(urlListe, urlId);
// click sur main===============================
console.log("currentJson == "+currentJson);
$('.main').click(function(){
  if (urlZone === "both"){
    console.log("both === ok");
    $('.pied').removeClass( "blanc" );
    $('.pied').addClass( "gris" );
    $('.main').removeClass( "gris" );
    $('.main').addClass( "blanc" );
      ongletAdd(urlListe, urlId, "main");
  }else if (urlZone === "main"){
  }else{
    alert(" il n'y a pas de soin plentaire !");
  };
});
//click sur pied================================
$('.pied').click(function(){
  if (urlZone === "both"){
    console.log("both === ok");
    $('.main').removeClass( "blanc" );
    $('.main').addClass( "gris" );
    $('.pied').removeClass( "gris" );
    $('.pied').addClass( "blanc" );
    ongletAdd(urlListe, urlId, "pied");
  }else if (urlZone === "pied"){
  }else{
    alert(" il n'y a pas de soin palmaire !");
  };
});
//fermeture  doc ready========================
});
