<?php
    $clicks = $_POST["clicks"]??[];
    $mensaje = "";
    $nombre = "";

    if (isset($_POST['submit'])){
        $nombre = $_POST["nombre"];

        switch($_POST["submit"]){
            case 'Sumar':
                if(isset($clicks[$nombre])){
                    $clicks[$nombre]++;
                } else {
                    $clicks[$nombre] = 1;
                }
                break;
        }

        foreach($clicks as $key => $value){
            $mensaje .= "<p>$key ha hecho $value clicks</p>";
        }
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
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
        <?php
            foreach($clicks as $key => $value){
                echo "<input type=\"hidden\" name=\"clicks[$key]\" value=\"$value\"></input>";
            }
        ?>
        <input type="text" name="nombre" value="<?= $nombre ?>">
        <input type="submit" name="submit" value="Sumar">
    </form>

    <?php
        var_dump($clicks??0);

        echo $mensaje;
    ?>
</body>
</html>