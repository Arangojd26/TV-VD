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
            <div class="w-100 p-3" style="background-color: #eee;">Width 100%</div>
            <div class="d-flex h-100 text-center float-right align-items-end pb-5">
                <div class="w-100 text-white pb-5 mr-5">
                    <h1 class="display-3">
                    <?php
                        include_once 'app/conexion.php';
                        //LEER
                        $sql_leer = 'SELECT * FROM jugadores WHERE id > 0 ORDER BY id DESC LIMIT 1';
                        $gsent = $pdo->prepare($sql_leer);
                        $gsent->execute();

                        $resultado = $gsent->fetchAll();
                        foreach($resultado as $dato){
                        echo $dato['nombreJugador'];
                        }
                    ?>
                    </h1>
                    <button id="myBtn" class="btn btn-info" onclick="myFunction()">Pause</button>
                </div>
            </div>
        </div>


    </header>

    


    <script src="app/reproductor.js" language="javascript" type="text/javascript"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"
        integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"
        integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ"
        crossorigin="anonymous"></script>
</body>

</html>