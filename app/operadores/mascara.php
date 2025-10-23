<?php
    $submit = $_POST["submit"]??null;

    switch($submit){
        case "Enviar":

            $mascara = $_POST["mascara"];
            $ip = $_POST["ip"];

            $pertenecer = "Sí";

            for($i = 0; $i < 4; ++$i){
                if(!($mascara[$i] & $ip[$i])){
                    $pertenecer = "No en el ".$i;
                    break;
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
    <p>Mascara: <?= $mascara[0] ?>.<?= $mascara[1] ?>.<?= $mascara[2] ?>.<?= $mascara[3] ?></p>
    <p>Ip: <?= $ip[0] ?>.<?= $ip[1] ?>.<?= $ip[2] ?>.<?= $ip[3] ?></p>
    <p>Pertecene: <?= $pertenecer ?></p>
</body>
</html>
