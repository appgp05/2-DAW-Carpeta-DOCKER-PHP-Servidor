<?php
$nombre = htmlspecialchars($_POST['nombre']);
$apellido = htmlspecialchars($_POST['apellido']);
$direccion = htmlspecialchars($_POST['direccion']);
$fNac = htmlspecialchars($_POST['fNac']);
$edad = htmlspecialchars($_POST['edad']);
$idiomas = $_POST['idiomas'];
$genero = htmlspecialchars($_POST['genero']);
$email = htmlspecialchars($_POST['email']);
$estudios = htmlspecialchars($_POST['estudios']);
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
    <p>Apellido: <?="$apellido"?></p>
    <p>Dirección: <?="$direccion"?></p>
    <p>Fecha de nacimiento: <?="$fNac"?></p>
    <p>Edad: <?="$edad"?></p>
    <p>Idiomas:</p>
    <?php
        foreach ($idiomas as $idioma) {
            echo "<p> - $idioma</p>";
        }
    ?>
    <p>Genero: <?="$genero"?></p>
    <p>Email: <?="$email"?></p>
    <p>Estudios: <?="$estudios"?></p>
</fieldset>
</body>
</html>
