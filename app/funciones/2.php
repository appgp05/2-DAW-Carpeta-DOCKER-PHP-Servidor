<?php

$mayor = function (int $a, int $b): int {
    return match ($a <=> $b) {
        1 => $a,
        -1 => $b,
        0 => $a
    };
};

$mayor2 = fn($a, $b) => match ($a <=> $b) {
    1 => $a,
    -1 => $b,
    0 => $a
};

$a = rand(1, 10);
$b = rand(1, 10);
$resultado = $mayor2($a, $a);

echo "<h1>El mayor de $a y $b es $resultado</h1>";

function factorial ($num){
    if($num == 0){
        return 1;
    } else {
        return $num * factorial($num - 1);
    }

    echo $resultado;
}

$n = factorial(8);

echo "<h1>El factorial de 8 es $n</h1>";

?>