<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprendiendo php</title>
    <!--Boostrap - CDN-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!--Hojas de Estilo Personal-->
    <link rel="stylesheet" type="text/css" href="css\style.css">
</head>

<body>
    <div class="container fondocontainer">
        <div class="jumbotron fondojumbotrom">
            <h1 class="display-4">Aprendiendo php 7</h1>
            <p class="lead">Prácticas correspondientes al curso de Udemy</p>
            <br>
        </div>
        <div class="row">
            <div class="col-12">
                <p class="lead">Fundamentos de php 7</p>
                <hr class="my-2">
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <h3>Array Ordenado</h3>
            </div>
            <div class="col-6">
                <?php
                $meses = array(
                    'enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio',
                    'julio', 'agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre'
                );
                sort($meses);
                ?>
                <h1>Meses del año</h1>
                <br>
                <h2>Orden Ascendente</h2>
                <ul>
                    <?php
                    foreach ($meses as $mes) {
                        echo '<li>' . $mes . '</li>';
                    }
                    ?>
                </ul>
                <br><br>
                <h2>Orden Descendente</h2>
                <?php
                rsort($meses);
                ?>
                <ul>
                    <?php
                    foreach ($meses as $mes) {
                        echo '<li>' . $mes . '</li>';
                    }
                    ?>
                </ul>
            </div>
            <div class="col-3">
                <img src="imagen\adorno.jpg" class="imgRedonda" alt="miimagen">
                <br><br>
            </div>

        </div>
    </div>
</body>

</html>