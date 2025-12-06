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

        $_SESSION["clave"] = $claveGenerada;
        break;
    case "Jugar":
        //var_dump($_POST['colores']);

        $jugada = new Jugada(1, $_POST["colores"]);

        $jugadaCorrecta = $jugada->comprobarJugada();

        if($jugadaCorrecta){
            $_SESSION["jugadas"][] = $jugada;
        } else {

        }


        break;
}


var_dump($_POST);

if(!isset($_SESSION["clave"])) {
    $claveGenerada = $clave->generar();

    $_SESSION["clave"] = $claveGenerada;
}

$html .= Plantilla::mostrarFormularioAcciones($botonMostrarClave);
$html .= Plantilla::mostrarFormularioJugar($_POST["colores"]??[]);
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