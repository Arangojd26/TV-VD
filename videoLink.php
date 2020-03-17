<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
        integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <title>Document</title>
    <script src="app/reproductor.js" language="javascript" type="text/javascript"></script>
    <link rel="script" type="text/javascript" href="app/reproductor.js">
    <link rel="stylesheet" href="assets/css/estilos.css">
</head>

<body>



    <header>


        <div class="overlay"></div>
        <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" id="myVideo">
            <source src="assets/vid/Skeler.mp4" type="video/mp4">
        </video>
        <div class="container h-100">
            
            <div class="d-flex h-100 text-center float-right align-items-end pb-5">
                <div class="d-flex flex-column w-100 text-white pb-5 mr-5">
                    <h4 class="display-5" id="puntuacion"></h4>
                    <!-- Llama el ultimo nombre de la base de datos y lo pinta en pantalla     -->
                    <h1 class="display-3" id="participante"> 
                    <?php
                        include_once 'app/conexion.php';
                        //LEER
                        $sql_leer = 'SELECT nombreJugador FROM jugadores WHERE id > 0 ORDER BY id DESC LIMIT 1';
                        $gsent = $pdo->prepare($sql_leer);
                        $gsent->execute();

                        $resultado = $gsent->fetchAll();
                        foreach($resultado as $dato){
                        echo $dato['nombreJugador'];
                        }
                    ?>
                    </h1><!-- Llama el ultimo nombre de la base de datos y lo pinta en pantalla     -->
                    <button id="myBtn" class="btn btn-info mt-3" onclick="myFunction()">Pause</button>
                    <button id="myBtnSuma" class="btn btn-info mt-3" onclick="score()">Contar</button>
                    <button id="myBtnGuardar" class="btn btn-success mt-3" onclick="enviarScoreyNombre()">Guardar</button>
                    
                    
                </div>
            </div>
        </div>


    </header>
    

    <!-- <script>
        console.log(document.getElementById("participante").innerHTML);
    </script> -->


    <script src="app/reproductor.js" language="javascript" type="text/javascript"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="http://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"
        integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"
        integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ"
        crossorigin="anonymous"></script>
</body>

</html>