//by <==Atax==>
//===============================================
$( document ).ready(function() {
console.log( "ready!" );
//
//===============================================
//
//js qui lit les JSON contenant les liste de maux
function writeList(id, zone, titre, liste){
  var zoneLogo = zone;
  $(".middle").append("<p><a href='methode.html?id="+id+"&amp;list="+liste+"&amp;zone="+zone+"'>"+titre+"&nbsp;&nbsp;</a><img src='assets/img/logo_"+zoneLogo+".png' alt='logos mains et pied'width='auto' height='15'></p>");
};

//li et ecrit le JSON en faisant appel a writeJSON
function readJSON(liste){
  $.getJSON( "assets/json/"+liste+".json", function() {
  //test de la connection au JSON===============
    console.log( "success" );
  })
  .done(function(data) {
    console.log( "second success" );
    //en cas de reussite (.done)lecture du JSON
    //on efface la case middle !===============
    $(".middle").html("");
    // et on lit grace a un foreach le json====
    $.each( data, function( key, val ) {
      var titre = val["titre"];
      var zone = val["zone"];
      var id = key;

      //console.log("n°"+key+" val: "+titre);
      // un foi lu on ecrit la liste===========
      writeList(id, zone, titre, liste);
      });
  })
  .fail(function() {
    console.log( "error" );
  })
  .always(function() {
    console.log( "function executed" );
  });
//fin de la fonction==========================
};
// appel sur les click des categories=========
$('.corps').click(function() {
  console.log("click corps ok");
  readJSON("corps");
});
$('.squelette').click(function() {
  console.log("click os ok");
  readJSON("os");
});
$('.organes').click(function() {
  console.log("click organes ok");
  readJSON("organes");
});
$('.maux').click(function() {
  console.log("click sensation ok");
  readJSON("sensation");
});


//fin du document ready==========================
});
