<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        Sentencia do While
    </h1>
    <?php
    // Al menos se ejecuta una vez
    $i = 1;
    do {
        echo $i . '<br>';
        $i++;
    } while ($i <= 10);
    ?>
</body>

</html>