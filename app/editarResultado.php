<?php

$error = '';

//VALIDANDO NOMBRE y Mandando a la base de datos
if(empty($_GET["contador"])){
    $error = 'Falló menor </br>';
}else{
    $conta = $_GET["contador"];
}


if($error == ''){
    echo $conta;
}else{
    echo $error;
}



// echo 'editarResultado.php?nombreJugador=1';

// $nombreJugador = $_GET['nombreJugador'];

// include_once 'conexion.php';

// $sql_editar = 'UPDATE jugadores SET otro=? WHERE nombre=?';
// $sentencia_editar = $pdo->prepare($sql_editar);
// $sentencia_editar->execute(array($nombreJugador));

// header('location:videoLink.php');



?>