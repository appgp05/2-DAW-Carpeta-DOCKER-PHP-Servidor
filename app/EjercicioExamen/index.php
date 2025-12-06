<?php
require_once "./vendor/autoload.php";

use clases\Plantilla;
use clases\Clave;
use clases\Jugada;

session_start();

$clave = new Clave;

$submit = $_POST["submit"]??null;

$mensaje = "";
$html = "";

$botonMostrarClave = $_SESSION["botonMostrarClave"]??true;

switch ($submit) {
    case "Mostrar Clave":
        $_SESSION["mostrarClave"] = true;
        $botonMostrarClave = false;

        break;
    case "Ocultar Clave":
        $_SESSION["mostrarClave"] = false;
        $botonMostrarClave = true;

        break;
    case "Resetear la Clave":
        session_destroy();
        session_start();

        $claveGenerada = $clave->generar();

        $_SESSION["clave"] = $claveGenerada;
        break;
    case "Jugar":

        $jugada = new Jugada(1, $_POST["colores"]);

        $jugadaCorrecta = $jugada->comprobarJugada();

        if($jugadaCorrecta){
            $_SESSION["jugadas"][] = $jugada;
        } else {
            $mensaje = "Debes seleccionar 4 colores para jugar";
        }

        break;
}


var_dump($_POST);

if(!isset($_SESSION["clave"])) {
    $claveGenerada = $clave->generar();

    $_SESSION["clave"] = $claveGenerada;
}

if($_SESSION["mostrarClave"]??true){
    $html .= Plantilla::mostrarColores($_SESSION["clave"]);
}
$html .= Plantilla::mostrarFormularioAcciones($botonMostrarClave);
$html .= Plantilla::mostrarFormularioJugar($_POST["colores"]??[], $mensaje);
$html .= Plantilla::mostrarJugadasAnteriores($_SESSION["jugadas"]??[]);
?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
    <script src="script.js"></script>
</head>
<body>
    <?= $html ?>
</body>
</html>