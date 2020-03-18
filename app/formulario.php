<?php

include_once 'conexion.php';

//LEER
$sql_leer = 'SELECT * FROM jugadores';

$gsent = $pdo->prepare($sql_leer);
$gsent->execute();

$resultado = $gsent->fetchAll();

// var_dump($resultado);

// foreach($resultado as $dato){
//     echo $dato['nombreJugador'];
// }

//AGREGAR nombre a la base de datos
$error = '';

//VALIDANDO NOMBRE y Mandando a la base de datos
if(empty($_POST["nombreJugador"])){
    $error = 'Ingresa un nombre </br>';
}else{
    $nombre = $_POST["nombreJugador"];
    $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);

    $sql_agregar = 'INSERT INTO jugadores (nombreJugador) VALUES (?)';
    $sentencia_agregar = $pdo->prepare($sql_agregar);
    $sentencia_agregar->execute(array($nombre));
}


//CUERPO DEL MENSAJE para enviar al email.
$cuerpo = 'Nombre: '.$nombre.'\n';

//DIRECCIÓN
$enviarA = 'arangojd26@gmail.com';
$asunto = 'Nuevo mensaje de mi sitio web';

//ENVIAR CORREO

if($error == ''){
    $success = mail($enviarA,$asunto,$cuerpo,'de: '.$enviarA);
    echo 'exito';
}else{
    echo $error;
}

?>