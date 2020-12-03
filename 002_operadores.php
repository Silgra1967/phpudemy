<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        Calculadora
    </h1>
    <br>
    <h2>
        Los números usandos son: 3 y 8
    </h2>
    <?php

    $numero = 3;
    $numero1 = 8;

    $resultado = $numero + $numero1;
    echo $resultado . '<br>';

    $resultado = $numero - $numero1;
    echo $resultado . '<br>';

    $resultado = $numero * $numero1;
    echo $resultado . '<br>';

    $resultado = $numero / $numero1;
    echo $resultado . '<br>';

    $resultado = $numero % $numero1;
    echo $resultado . '<br>';

    ?>
</body>

</html>