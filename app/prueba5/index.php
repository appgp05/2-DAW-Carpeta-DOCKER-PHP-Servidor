<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
<?php
    $contador = 60000;
    $veces1 = 0;
    $veces2 = 0;
    $veces3 = 0;
    $veces4 = 0;
    $veces5 = 0;
    $veces6 = 0;

    for($i = 0; $i < $contador; $i++){
        $numeroDado = rand(1, 6);
        switch($numeroDado){
            case 1:
                $veces1++;
                break;
            case 2:
                $veces2++;
                break;
            case 3:
                $veces3++;
                break;
            case 4:
                $veces4++;
                break;
            case 5:
                $veces5++;
                break;
            case 6:
                $veces6++;
                break;
        }
    }

    echo "<p>$veces1</p>";
    echo "<p>$veces2</p>";
    echo "<p>$veces3</p>";
    echo "<p>$veces4</p>";
    echo "<p>$veces5</p>";
    echo "<p>$veces6</p>";
?>
</body>
</html>