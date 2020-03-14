//console.log("funcionado");

$("#formulario").submit(function(event){
    event.preventDefault(); //Almacena los datos sin refrescar el sitio web.
    enviar();
});

function enviar(){
    //console.log("ejecutado");
    var datos = $("#formulario").serialize(); //Toma los datos name y los guarda en un arreglo.
    $.ajax({ //Envía los datos a formulario php, sin actualizar la pagina.
        type: "post",
        url:"app/formulario.php",
        data: datos,
        success: function(texto){
            if(texto=="exito"){
                correcto();
            }else{
                phpError(texto);  
            }
        }
    })
}

function correcto(){
    $("#mensajeExito").removeClass("d-none");
    $("#mensajeError").addClass("d-none");
}
function phpError(texto){
    $("#mensajeError").removeClass("d-none");
    $("#mensajeError").html(texto);
}