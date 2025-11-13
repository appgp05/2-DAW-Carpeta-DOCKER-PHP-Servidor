<?php
    $html = "";

    if(isset($_POST["submit"])) {
        spl_autoload_register(fn($class) => require $class . ".php");
        $texto = filter_input(INPUT_POST , "texto", FILTER_SANITIZE_SPECIAL_CHARS);
        $expresionRegular = filter_input(INPUT_POST, "expresionRegular", FILTER_SANITIZE_SPECIAL_CHARS);

        var_dump($texto, $expresionRegular);

        $html .= new ExpresionRegular()::comprobar($expresionRegular, $texto);
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
    <form action="index.php" method="post">
        <label for="texto">Introduzca el texto:</label><br>
        <input type="text" name="texto" value="<?= $_POST["texto"]??"" ?>"><br>
        <label for="expresionregular">Introduzca la expresión regular:</label><br>
        <input type="text" name="expresionRegular" value="<?= $_POST["expresionRegular"]??"" ?>"><br>
        <input type="submit" name="submit" value="Comprobar">
    </form>
    <?= $html ?>
</body>
</html>
