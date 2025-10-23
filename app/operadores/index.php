<?php
    $submit = $_POST["submit"]??null;

    switch($submit){
        case "Enviar":

            $mascara = $_POST["mascara"];
            $ip = $_POST["ip"];

            for($i = 0; $i < 4; $i++){

                if(!($mascara[$i] & $ip[$i])){
                    $pertenecer .= "No. ";
                } else {
                    $pertenecer .= "Sí. ";
                }
            }

            break;
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
    <?php
        for($i = 0; $i < 10; $i++){
            echo "<p>2<sup>".$i."</sup> = ".(2**$i)."</p>";
        }

        $a = 5;
        $b = ++$a;
        $c = $a++;

        echo "<p>".$a."</p>";
        echo "<p>".$b."</p>";
        echo "<p>".$c."</p>";

        $nombre = "María";
        $alias = &$nombre;

        $alias = "Daniel";

        echo "<p>Valor del nombre: ".$nombre."</p>";
        echo "<p>Valor del nombre: ".$alias."</p>";

        $nombre = "Juan";

        echo "<p>Valor del nombre: ".$nombre."</p>";
        echo "<p>Valor del nombre: ".$alias."</p>";
        function mayusculas (&$nombre) {
            echo "<p>".$nombre."</p>";
            $nombre = strtoupper($nombre);
            echo "<p>".$nombre."</p>";
        }

        $nombre = "Alberto";
        mayusculas($nombre);
        echo "<p>Valor del nombre: ".$nombre."</p>";

        $logica = true and false;
        if($logica == true){
            $resultado = "true";
        } else {
            $resultado = "false";
        }
        echo "<p>Valor de la logica: ".$resultado."</p>";
        echo "<p>-".$logica."-</p>";

        $logica = true && false;
        if($logica == true){
            $resultado = "true";
        } else {
            $resultado = "false";
        }
        echo "<p>Valor de la logica: ".$resultado."</p>";
        echo "<p>-".$logica."-</p>";

        $numero = @(1 + "25 pepe");

        $n1 = 128;
        $n2 = 200;
        $and = $n1 & $n2;
        echo "<p>And: ".$and."</p>";
    ?>

    <form action="index.php" method="post">
        <input type="number" name="mascara[]" value="<?= $mascara[0]??"" ?>" placeholder="mascara">
        <input type="number" name="mascara[]" value="<?= $mascara[1]??"" ?>" placeholder="mascara">
        <input type="number" name="mascara[]" value="<?= $mascara[2]??"" ?>" placeholder="mascara">
        <input type="number" name="mascara[]" value="<?= $mascara[3]??"" ?>" placeholder="mascara">
        <input type="number" name="ip[]" value="<?= $ip[0]??"" ?>" placeholder="ip">
        <input type="number" name="ip[]" value="<?= $ip[1]??"" ?>" placeholder="ip">
        <input type="number" name="ip[]" value="<?= $ip[2]??"" ?>" placeholder="ip">
        <input type="number" name="ip[]" value="<?= $ip[3]??"" ?>" placeholder="ip">
        <input type="submit" name="submit" value="Enviar">
    </form>

    <?php if ($submit != null) { ?>
    <p>Mascara: <?= $mascara[0] ?>.<?= $mascara[1] ?>.<?= $mascara[2] ?>.<?= $mascara[3] ?></p>
    <p>Ip: <?= $ip[0] ?>.<?= $ip[1] ?>.<?= $ip[2] ?>.<?= $ip[3] ?></p>
    <p>Pertecene: <?= $pertenecer ?></p>
    <?php } ?>

    <?php
        for($i = 0; $i < 10; $i++){
            echo "<p>".$i." x 2 = ".($i << 1)."</p>";
        }

        echo str_repeat("#", 30);

        for($i = 0; $i < 50; $i++){
            echo "<p>2 ^ ".$i." = ".(1 << ($i << 0))."</p>";
        }
        for($i = 0; $i <50 ; $i++){
            echo "<p>2 ^ ".($i+1)." = ".(2 << $i)."</p>";
        }
    ?>
</body>
</html>