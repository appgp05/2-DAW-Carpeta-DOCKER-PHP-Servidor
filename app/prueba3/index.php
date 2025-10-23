<?php
    $edad = rand (1, 150);
    $edad = 0;
    $msj = "";
    $msj = match ($edad) {
        0 => "Eres un bebé",
        default => ""
    };
//    switch (true) {
//        case ($edad < 3):
//            $msj = "Eres un bebé";
//            break;
//        case ($edad < 11):
//            $msj = "Eres un niño";
//            break;
//        case ($edad < 17):
//            $msj = "Eres un adolescente";
//            break;
//        case ($edad < 30):
//            $msj = "Eres un joven";
//            break;
//        case ($edad < 50):
//            $msj = "Eres un adulto";
//            break;
//        case ($edad < 90):
//            $msj = "Eres un experimentado";
//            break;
//        case ($edad < 120):
//            $msj = "Eres un suertudo";
//            break;
//        default:
//            $msj = "Imposible";
//            break;
//    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
    <h1>
        Tienes <?="$edad"?> años
    </h1>
    <h1>
        <?="$msj"?>
    </h1>
</body>
</html>