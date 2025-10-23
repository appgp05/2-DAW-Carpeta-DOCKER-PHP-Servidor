<?php
//Escribimos aquí todo el php correspondiente al controlador
//Instrucciones y lógica necesarias queno visualizan valor,lo generan

$mensaje = "";

if(sizeof($_POST) > 0){

    $opcion = $_POST['submit'] ?? "";

    switch ($opcion) {
        case 'Acceder':
            $mensaje = "<p>Intentando acceder</p>";

            $usuario = htmlspecialchars($_POST['usuario']??"");
            $contrasena = htmlspecialchars($_POST['contrasena']??"");

            if($usuario == $contrasena && $usuario != ""){
                header("Location:sitio.php?usuario=$usuario");
                exit();
            } else {
                $mensaje = "<p>Datos incorrectos</p>";
            }

            break;
        case 'Borrar':
            $mensaje = "<p>Borrando</p>";
            breaK;
        case "Cancelar":
            $mensaje = "<p>Cancelando</p>";
            break;
        default:
            break;
    }
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo de PHP en HTML</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <div class="box">
        <h2>Texto enunciado breve</h2>
        <ul>
            <li>Items enunciado</li>
            <li>...</li>
        </ul>
    </div>

    <!-- Sección para el resultado de PHP -->
    <div class="box">
        <h2>Resultado</h2>
        <hr>

        <form action="acceso.php" method="post">
            <input type="text" name="usuario" placeholder="Usuario">
            <input type="text" name="contrasena" placeholder="Contrasena">
            <input type="submit" name="submit" value="Acceder">
            <input type="submit" name="submit" value="Borrar">
            <input type="submit" name="submit" value="Cancelar">
        </form>

        <?php
        echo $mensaje
        ?>
    </div>

</div>
</body>
</html>