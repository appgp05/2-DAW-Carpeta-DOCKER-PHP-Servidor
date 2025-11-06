<?php
    require_once ("Racional.php");
    $r1 = new Racional(5, 5);  // 5/5
    $r2 = new Racional();                           // 1/1
    $r3 = new Racional(25);               // 25/1
    $r4 = new Racional(7, 9);  // 7/9
    $r5 = new Racional("8/7");            // 8/7

    $htmlEchoRacionales = "";
    $htmlEchoRacionales .= "<p>Valor del r1: $r1</p>";
    $htmlEchoRacionales .= "<p>Valor del r2: $r2</p>";
    $htmlEchoRacionales .= "<p>Valor del r3: $r3</p>";
    $htmlEchoRacionales .= "<p>Valor del r4: $r4</p>";
    $htmlEchoRacionales .= "<p>Valor del r5: $r5</p>";

    $htmlEchoRacionales;
    if(isset($_POST['submit'])){
        $racional = new Racional($_POST['numeroRacional']);
        $htmlEchoRacionales .= "<p>$racional</p>";
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
    <?= $htmlEchoRacionales ?>

    <form action="index.php" method="post">
        <input type="text" name="numeroRacional">
        <input type="submit" name="submit" value="Enviar">
    </form>
</body>
</html>