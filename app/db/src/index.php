<?php

use clases\database\Database;

$submit = $_POST["submit"];

    $database = Database::getInstance();

    switch ($submit) {
        case "Login":
            break;
        case "Register":
            $name = $_POST["name"];
            $password = $_POST["password"];

            $msj = $database->registerUser($name, $password);
            if($msj){
                header("location: sitio.php");
            }

            break;
        default:
            break;
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>
</head>
<body class="h-scrren flex justify-center items-center">
    <fieldset class="bg-yellow-200">
        <legend class="text-blue-800 text-2xl">Datos de acceso</legend>

        <form action="">
            <div>
                <label for="">Usuario</label>
                <input type="text" name="name">
            </div>
            <div>
                <label for="">Pssword</label>
                <input type="text" name="password">
            </div>
            <div>
                <input type="submit" value="Login">
                <input type="submit" value="Register">
            </div>
        </form>
    </fieldset>
</body>
</html>