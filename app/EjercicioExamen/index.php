<?php
require_once "./vendor/autoload.php";

use clases\Plantilla;
use clases\Clave;

session_start();


$colores = [
    ["Azul", "blue"],
    ["Rojo", "red"],
    ["Naranja", "orange"],
    ["Verde", "green"],
    ["Violeta", "violet"],
    ["Amarillo", "yellow"],
    ["Marrón", "brown"],
    ["Rosa", "pink"],
];

$clave = new Clave;

$submit = $_POST["submit"]??null;

switch ($submit) {
    case "Mostrar Clave":
        var_dump($_SESSION["clave"]);
        break;
    case "Resetear la Clave":

        $claveGenerada = $clave->generar($colores);

        $_SESSION['clave'] = $claveGenerada;
        break;
}

$html = "";




if(!isset($_SESSION["clave"])) {
    $claveGenerada = $clave->generar($colores);

    $_SESSION['clave'] = $claveGenerada;
}


$html = "";

$html .= Plantilla::mostrarFormularioAcciones();
$html .= Plantilla::mostrarFormularioJugar($colores);
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