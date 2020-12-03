<?php
$meses = array(
    'enero', 'febrero', 'marzo', 'abril',
    'mayo', 'junio', 'julio', 'agosto',
    'septiembre', 'octubre', 'noviembre', 'diciembre'
);
$silvina = array('Teléfono' => 46546, 'Edad' => 53, 'País' => 'Argentina');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        Ciclo ForEach
    </h1>
    <h21>
        Meses
        </h2>
        <ul>
            <?php
            foreach ($meses as $mes) {
                echo '<li>' . $mes . '</li>';
            }
            ?>
        </ul>
        <h2>
            Arreglo Asociativo
        </h2>
        <ul>
            <?php
            foreach ($silvina as $dato => $valor) {
                echo '<li>' . $dato . ': ' . $valor . '</li>';
            }
            ?>
        </ul>
</body>

</html>