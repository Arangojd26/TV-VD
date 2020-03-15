<!doctype html>
<html lang="es">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
        integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

    <title>Video y TV</title>

    <style>
        .fondo {
            background: url("assets/img/02.jpg");
            height: 50%;
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .alto {
            height: 100vh;
        }
    </style>
</head>

<body>

    <div class="container-fluid fondo">
        <div class="container">
            <!-- Fila de título y de mensaje de verificación-->
            <div class="row justify-content-center alto pt-5">
                <div class="col-md-7 mt-5 pt-5">
                    <h1 class="display-4 text-center text-light font-weight-bold">Escribe tu nombre</h1>
                    <hr class="bg-light">
                    <div class="alert alert-success d-none" id="mensajeExito">Estudiante creado con éxito</div>
                    <div class="alert alert-danger d-none" id="mensajeError"></div>
                    <!-- Fila de ingresar valores-->
                    <form id="formulario" novalidate method="POST" action="videoLink.php">
                        <div class="row form-group justify-content-center">
                            <div class="col-md-8 mt-3">
                                <input type="text" name="nombreJugador" value="" id="nombreJugador" class="form-control" required>
                            </div>
                        </div>
                        <!-- Fila botón para guardar el nombre-->
                        <div class="row justify-content-center">
                            <button type="submit" class="btn btn-info mt-3" style="font-size:24px">Guardar
                                <i class="fa fa-save"></i></button>
                        </div>
                        
                        <!-- Fila botón para continuar con el video-->
                        <div class="row justify-content-center">
                            <a class="text-light mt-5 pt-4" href="videoLink.php" role="button" id="enviarNombre" name="enviarNombre">
                                <i class="fas fa-play-circle fa-spin display-1"></i>
                            </a>

                        </div>
                        <div class="text-center mt-3">
                            <a href="videoLink.php" class="text-light" role="button">
                                <h5 class="text-light" style="font-size:24px">Continuar</h1>
                            </a>
                        </div>


                    </form>
                </div>
            </div>
        </div>

    </div>

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
    <script src="app/formulario.js"></script>
</body>