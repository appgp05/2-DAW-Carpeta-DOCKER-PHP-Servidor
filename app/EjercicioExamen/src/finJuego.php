<?php
require_once "./../vendor/autoload.php";

use clases\Plantilla;

session_start();

$html = Plantilla::mostrarResultadoPartida();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <?= $html ?>
</body>
</html>
