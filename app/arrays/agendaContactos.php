<!--
    No se permiten dos contactos con el mismo teléfono


-->

<?php
    $contactos = [];
    $error = "";

    $submit = $_POST['submit']??"";

    switch ($submit) {
        case "Añadir contacto":
            $contactos = $_POST['contactos']??[];

            $nombre = $_POST['nombre'];
            $telefono = $_POST['telefono'];

            if(empty($nombre)){
                $error = "No ha introducido ningún nombre";
                break;
            }

            if(empty($telefono)){
                if(isset($contactos[$nombre])){
                    unset($contactos[$nombre]);
                } else {
                    $error = "El contacto a eliminar no existe.";
                    break;
                }
            } else {
                if(isset($contactos[$nombre]) && $contactos[$nombre] == $telefono){
                    $error = "El número introducido es el mismo que el del contacto a modificar.";
                    break;
                } else {
                    $contactos[$nombre] = $telefono;
                }
            }
            break;
        case "Eliminar contactos":
            $contactos = [];
            break;
        default:
            break;
    }
    $numeroContactos = count($contactos);

    function obtenerInputsHidden(array $contactos): string{
        $html = "";
        foreach($contactos as $key => $value){
            $html .= "<input type='hidden' name='contactos[$key]' value='$value'>";
        }
        return $html;
    }

    function obtenerListaContactos(array $contactos): string{
        $html = "";

        $numeroContactos = sizeof($contactos);

        if($numeroContactos > 0){
            foreach($contactos as $key => $value){
                $html .= "
                    <tr>
                        <td>$key</td>
                        <td>$value</td>
                    </tr>
                ";
            }
        } else {
            $html .= "
                    <tr>
                        <td>La lista de contactos está vacía</td>
                    </tr>
                ";
        }

        return $html;
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <link rel="stylesheet" href="agendaContactos.css">
</head>
<body>
    <form id="formularioContactos" action="agendaContactos.php" method="post">
        <?= obtenerInputsHidden($contactos) ?>
        <div>
            <input type="text" name="nombre">
            <input type="number" name="telefono">
        </div>
        <div>
            <input type="submit" name="submit" value="Añadir contacto">
            <input type="submit" name="submit" value="Eliminar contactos" <?php if($numeroContactos == 0) echo "disabled"; ?>>
        </div>
</form>
    <p class='error'><?= $error ?></p>


    <?= "<h1>Lista de contactos: $numeroContactos</h1>" ?>
    <table id="listaContactos">
        <tr>
            <td>Nombre</td>
            <td>Telefono</td>
        </tr>
        <?= obtenerListaContactos($contactos) ?>
    </table>
</body>
</html>
