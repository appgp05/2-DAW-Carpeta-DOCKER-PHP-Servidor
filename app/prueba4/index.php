<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
<?php
    $numeroTotal = 0;
    $contador = 0;
    $contadorParesSumados = 0;

    echo "<h1>NÚMEROS</h1>";

    while($contadorParesSumados < 100){
        if(!($contador%3 == 0)){
            $contador++;
            echo "<p>$contador</p>";
        }

        $numeroTotal += $contador;

        $contador++;
        $contadorParesSumados++;
    }

    echo "<h1>TOTAL</h1>";
    echo "<p>$numeroTotal</p>";
?>
</body>
</html>