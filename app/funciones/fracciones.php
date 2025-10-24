<?php

$r1 = racional(1,6);// 1/6;
$r2 = racional(20, null);// 20/1;
$r3 = racional("7/8", null);// 7/8;
$r4 = racional();// 1/1;

function racional(int|string|null $num = 1, int|null $den = 1): string{
//    echo gettype($num);

    switch (gettype($num)) {
        case 'string':
            $numeradorYDenominador = explode("/", $num);

            $resultado = $numeradorYDenominador[0]/$numeradorYDenominador[1];

            $mensaje = "$numeradorYDenominador[0]/$numeradorYDenominador[1] = $resultado";
            break;
        case 'integer':
            if(is_int($den)){
                $resultado = $num/$den;

                $mensaje = "$num/$den = $resultado";
            } else {
                $mensaje = "$num/1 = $num";
            }
            break;
        case 'NULL':
            $resultado = $num/$den;
            $mensaje = "$num/$den = $resultado";
            break;
        default:
            $mensaje = "Inválido";
            break;
    }

    return $mensaje;
}

echo "<h1>$r1</h1>";
echo "<h1>$r2</h1>";
echo "<h1>$r3</h1>";
echo "<h1>$r4</h1>";

?>