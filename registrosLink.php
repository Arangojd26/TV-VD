<?php
include_once 'app/conexion.php';
//LEER
$sql_leer = 'SELECT * FROM jugadores ORDER BY score DESC';

$gsent = $pdo->prepare($sql_leer);
$gsent->execute();

$resultado = $gsent->fetchAll();

?>

<!doctype html>
<html lang="es">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
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

        body {
            background-color: white;
            background-image: url("assets/img/02.jpg");
            background-repeat: no-repeat;
            background-size: cover;

        }

        @media (max-width: 768px) {
            body {
                font-size: 15px;
            }
        }

        h1 {
            font-size: 4.2em;
        }
    </style>

</head>

<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12 align-items-center">
                <h1 class="text-center text-dark font-weight-bold text-uppercase">Estudiantes</h1>
                <h3 class="display-4 lead text-light text-center font-weight-bold text-uppercase my-5">Puntajes</h3>
                <div class="text-light text-center mb-5">
                    <i class="fa fa-spinner fa-pulse display-4"></i>
                </div>
                <div class="text-right mb-2">
                    <a href="app/eliminar.php" class="btn btn-primary text-right">
                        <i class="fa fa-trash"></i> Limpiar
                    </a>
                </div>

            </div>

        </div>


        <div class="row">

            <div class="col-md-12">
                <table class="table-responsive">
                    <table class="table table-hover table-borderless">

                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Score</th>

                            </tr>
                        </thead>
                        <tbody id="tablaRanking">
                            <?php $cont = 1;
                            foreach ($resultado as $dato) : ?>
                                <tr>
                                    <th scope="row" id="ranking">
                                        <?php
                                        echo $cont;
                                        $cont++;
                                        ?></th>
                                    <td><?php echo $dato['nombreJugador']; ?></td>
                                    <td><?php echo $dato['score']; ?></td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </table>

            </div>

        </div>


    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>