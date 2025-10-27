<?php
    $numero1 = 30;
    $numero2 = 20;

    $resultado = maximoComunDivisor($numero1, $numero2);

    function maximoComunDivisor($numero1, $numero2){
        $resto = $numero2;
        do {
            echo "<p>$numero1 % $resto = $resto</p>";

            $resto = $numero1 % $resto;
            $numero1 = $numero2;
            $numero2 = $resto;
        } while($resto != 0);

        echo "<p>$numero1 % $resto = $resto</p>";

        return $numero1;
    }

    $maximoComunDivisor = function ($numero1, $numero2){
        $resto = $numero2;
        do {
            echo "<p>$numero1 % $resto = $resto</p>";

            $resto = $numero1 % $resto;
            $numero1 = $numero2;
            $numero2 = $resto;
        } while($resto != 0);

        return $numero1;
    };

    function maximoComunDivisorRecursivo($numero1, $numero2){
        $resto = $numero1 % $numero2;

        if ($resto == 0) {
            return $numero2;
        }

        return maximoComunDivisorRecursivo($numero2, $resto);
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
    <h1>El máximo común divisor de <?= $numero1 ?> y <?= $numero2 ?> = <?= $resultado ?></h1>
</body>
</html>







//    function maximoComunDivisor($numero1, $numero2){
//        $mayorMenorFuncion = fn($numeroDado1, $numeroDado2) => match ($numeroDado1 <=> $numeroDado2) {
//            1 => [$numeroDado1, $numeroDado2],
//            -1 => [$numeroDado2, $numeroDado1],
//            0 => [$numeroDado1, $numeroDado1],
//        };
//
//        $mayorMenor = $mayorMenorFuncion($numero1, $numero2);
//
//        echo "<p>$mayorMenor[0], $mayorMenor[1]</p>";
//
//        if($mayorMenor[0] === "Iguales"){
//            return $numero1;
//        } else {
//            $resta = 0;
//
//            do {
//                $resta = $mayorMenor[0] % $mayorMenor[1];
//                echo "<p>$resta = $mayorMenor[0] % $mayorMenor[1]</p>";
//                $mayorMenor = $mayorMenorFuncion($mayorMenor[1], $resta);
//            } while($resta > 1);
//
//            return $mayorMenor[0];
//        }
//    }