<?php
require './../vendor/autoload.php';

use Dotenv\Dotenv;
use clases\BaseDeDatos;

$dotenv = Dotenv::createImmutable(__DIR__."/..");
$dotenv->load();

session_start();

if(isset($_SESSION["usuario"])){
    header("location: ./jugar.php");
}

$baseDeDatos = BaseDeDatos::getInstance();

$submit = $_POST["submit"]??null;
switch ($submit) {
    case "Iniciar Sesión":
        $usuario = $_POST["usuario"]??null;
        $password = $_POST["password"]??null;

        $usuarioEncontrado = $baseDeDatos->comprobarUsuario($usuario, $password);

        if($usuarioEncontrado === true){
            $_SESSION["usuario"] = $usuario;

            header("location: jugar.php");
        } else {
            $mensaje = "<p class='mensajeInfo'>Usuario o contraseña incorrectos</p>";
        }

        break;
    case "Registrarme":
        $usuario = $_POST["usuario"]??null;
        $password = $_POST["password"]??null;

        $usuarioRegistrado = $baseDeDatos->registrarUsuario($usuario, $password);

        if($usuarioRegistrado === true){
            $_SESSION["usuario"] = $usuario;

            header("location: jugar.php");
        }

        $mensaje = "<p class='mensajeError'>$usuarioRegistrado</p>";

        break;
    default:
        break;
}

if(false){
    header('location: ./jugar.php');
}
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
    <form action="index.php" method="post">
        <input type="text" name="usuario" value="<?= $usuario??"" ?>" placeholder="Usuario">
        <input type="text" name="password" value="<?= $password??"" ?>" placeholder="Contrasena">
        <input type="submit" name="submit" value="Iniciar Sesión">
        <input type="submit" name="submit" value="Registrarme">
        <?= $mensaje??"" ?>
    </form>
</body>
</html>
