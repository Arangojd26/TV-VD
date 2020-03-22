
var video = document.getElementById("myVideo");
var btn = document.getElementById("myBtn");
var btnSuma = document.getElementById("myBtnSuma");
var contador = 0;
var nombreP = document.getElementById("participante");

// Declara el objeto de "SerialPort" que se va a utilizar
var serial;
var port = 'COM5'; // variable que indica el puerto serial utilizado por el Arduino
// var backgroundColor = 'rgb(0, 0, 0)'; // variable donde se almacena el color de fondo
var data;

function setup() {
 

 // Crea un objeto del tipo SerialPort
 serial = new p5.SerialPort();

 // Determina el método que se llama para listar los puertos seriales conectados
 serial.list();
 serial.on('list', portList);

 // Abre la conexión con el puerto donde está conectado el Arduino
 serial.open(port);

 // Determina el método que se llama cuando hay datos en el puerto
 serial.on('data', getData);
}

// Método que muestra por consola los puertos seriales conectados al PC
function portList(ports) {
 console.log('Listado de puertos seriales:');
 // recorre el listado de puertos seriales y los muestra por consola
 for (var i = 0; i < ports.length; i++) {
     console.log(ports[i]);
 }
}

// Método que llama al recibir datos desde el puerto serial
function getData() {

   data = serial.readStringUntil("\r\n");// lee los datos desde el puerto serial
   trim(data);                    // elimina los espacios en blanco al principio y final de los datos, si los hay
   if (!data) return;             // si los datos leídos están vacíos no hace nada
   console.log(data);             // muestra los datos leídos
   document.getElementById("ultrasonido").innerHTML = data + " cm";
   data = data * 3.5;
   $(".progress-bar").css("width", data + "%");//.text(data + " %");
  //  document.getElementById("barra").innerHTML = data + " cm";
  //  document.getElementById("barra").item(0).setAttribute('aria-valuenow',data);
   
}


function draw() {
 
}


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
