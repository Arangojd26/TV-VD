<?php
    include_once 'conexion.php';
    $sql_eliminar = 'DELETE FROM jugadores';

    $gsentencia_eliminar = $pdo->prepare($sql_eliminar);
    $gsentencia_eliminar->execute();

    header('Location: /TV-VD/registrosLink.php');


// $resultado = $gsent->fetchAll();
?>