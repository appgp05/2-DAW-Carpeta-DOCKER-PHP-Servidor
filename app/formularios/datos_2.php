<?php
    $nombre = htmlspecialchars($_POST['nombre']);
    $password = htmlspecialchars($_POST['password']);
    $edad = filter_input(INPUT_POST, 'edad', FILTER_SANITIZE_NUMBER_INT);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<fieldset style="background: antiquewhite;width:70%;margin:10%">
    <legend>Ficha de datos</legend>
    <p>Nombre: <?="$nombre"?></p>
    <p>Password: <?="$password"?></p>
    <p>Edad: <?="$edad"?></p>
</fieldset>
</body>
</html>
