//console.log("funcionado");

$("#formulario").submit(function(event){
    event.preventDefault(); //Almacena los datos sin refrescar el sitio web.
    enviar();
});

function enviar(){
    //console.log("ejecutado");
    var datos = $("#formulario").serialize(); //Toma los datos name y los guarda en un arreglo.
    $ajax({
        type: "post",
        url: "formulario.php",
        data: datos,
        success: function(texto){
            if(texto=="exito"){
                correcto();
            }else{
                phpError();
            }
        }
    })
}

function correcto(){
    $("#mensajeExito").removeClass("d-none");
}
function phpError(){
    $("#mensajeError").removeClass("d-none");
}