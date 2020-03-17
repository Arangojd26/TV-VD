
var video = document.getElementById("myVideo");
var btn = document.getElementById("myBtn");
var btnSuma = document.getElementById("myBtnSuma");
var contador = 0;
var nombreP = document.getElementById("participante");


function myFunction() {
  if (video.paused) {
    video.play();
    btn.innerHTML = "Pause";
  } else {
    video.pause();
    btn.innerHTML = "Play";
  }
}

function score() {
  contador = contador + 1;
  btnSuma.innerHTML = contador;
  // Esta es la variable que vamos a pasar
  var datos = contador;
  var passURL = "app/editarResultado.php?contador=" + datos;
  $.ajax({ //Envía los datos a editarResultado.php, sin actualizar la pagina.
    type: "post",
    url:passURL,
    data: datos,
    success: function(texto){
        if(texto==contador){
            correcto();
        }else{
            phpError(texto);  
        }
    }
})
console.log(document.getElementById("myBtnSuma").innerHTML);
}

function enviarScoreyNombre() {
  var puntaje = btnSuma.innerHTML;
  var n = nombreP.innerHTML;
  var passURL2 = "app/actualizarScore.php?conta=" + puntaje + "&nombreJu=" + n;
  $.ajax({ //Envía los datos a editarResultado.php, sin actualizar la pagina.
    type: "post",
    url:passURL2,
    data: puntaje,
    success: function(texto){
        if(texto==puntaje){
            console.log(texto+" Bien ahí");
        }else{
          console.log('De verdad acostate ya');
        }
    }
})
 console.log(passURL2);

}

function correcto(){
  $("#puntuacion").html(contador);
}
function phpError(texto){
  $("#puntuacion").html(texto);
}
