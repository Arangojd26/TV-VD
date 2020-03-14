<?php

$link = 'mysql:host=localhost;dbname=estudiantes';
$usuario = 'root';
$contraseña = 'root';

try {
    $pdo = new PDO($link, $usuario, $contraseña);
    // foreach($pdo->query('SELECT * FROM `jugadores`') as $fila) {
    //     print_r($fila);
    // }
    // echo 'Conectado';
    
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}


?>