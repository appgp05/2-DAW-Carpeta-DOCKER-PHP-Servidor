<?php
    spl_autoload_register(function ($class){
        require_once "$class.php";
    });

    $perro = new Perro(4, "galgo");
    $gato = new Gato(4, "chino");
    $pato = new Pato(2, "volador");

    $html = "";
    $html .= "<p>".$perro.$perro->hablar()."</p>";
    $html .= "<p>".$gato.$gato->hablar()."</p>";
    $html .= "<p>".$pato.$pato->hablar()."</p>"
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
    <?= $html ?>
</body>
</html>
