<?php

if($_GET){

    include_once 'conexion.php';

    //LEER
    $sql_leer = 'SELECT nombreJugador FROM jugadores WHERE id > 0 ORDER BY id DESC LIMIT 1';
    $gsent = $pdo->prepare($sql_leer);
    $gsent->execute();

    $resultado = $gsent->fetchAll();
    foreach($resultado as $dato){
        $dato['nombreJugador'];
    }

    $nombreActual = $dato['nombreJugador'];
    $conta2 = $_GET["conta"];
    $sda= "7";
    
    $sql_editar = 'UPDATE jugadores SET score=? WHERE nombreJugador=?';
    $sentencia_editar = $pdo->prepare($sql_editar);
    $sentencia_editar->execute(array($conta2,$nombreActual));
    echo $conta2;

}



//  header('location:videoLink.php');

// echo 'editarResultado.php?nombreJugador=1';

?>