<?php
require_once "./vendor/autoload.php";

use clases\Plantilla;
use clases\Clave;
use clases\Jugada;

session_start();

$clave = new Clave;

$submit = $_POST["submit"]??null;

$html = "";

$botonMostrarClave = true;

switch ($submit) {
    case "Mostrar Clave":
        var_dump($_SESSION);

        $html .= Plantilla::mostrarColores($_SESSION["clave"]);
        $botonMostrarClave = false;

        break;
    case "Ocultar Clave":
        $botonMostrarClave = true;

        break;
    case "Resetear la Clave":
        session_destroy();
        session_start();
        //session_reset();

        $claveGenerada = $clave->generar();

        $_SESSION['clave'] = $claveGenerada;
        break;
    case "Jugar":
        //var_dump($_POST['colores']);

        $jugada = new Jugada(1, $_POST['colores']);

        $_SESSION['jugadas'][] = $jugada;

        break;
}


var_dump($_POST);


if(!isset($_SESSION["clave"])) {
    $claveGenerada = $clave->generar();

    $_SESSION['clave'] = $claveGenerada;
}

$html .= Plantilla::mostrarFormularioAcciones($botonMostrarClave);
$html .= Plantilla::mostrarFormularioJugar();
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