<?php
    $usuario = isset($_GET["usuario"])?htmlspecialchars(filter_input(INPUT_GET, $_GET["usuario"])):"";

    if($usuario == ""){
        header("Location: acceso.php");
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
    Has llegado al sitio, bienvenido <?= $usuario ?>
</body>
</html>