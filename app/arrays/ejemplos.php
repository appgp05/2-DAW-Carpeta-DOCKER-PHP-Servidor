<?php
    $notas = array(20, [123, "123"]);
    $notas_2 = [-101 => "asd", -101 => "asdasss", 123 => 324, 11 => 234 ,50 => 333, 3434];

    $notas["asdasd"]=234333333;

    var_dump($notas);
    var_dump($notas_2);

    sort($notas);

    var_dump($notas_2);

    for($i = 0; $i < 20; ++$i){
        $notas_3[] = rand(0, 10);
    }

    var_dump($notas_3);

    $notas = array_fill(0, 20, 4);
    var_dump($notas);

    function inicializa(){
        return rand(0, 10);
    }

    $notas = array_map("inicializa", $notas);
    var_dump($notas);

    $max = max($notas);
    $min = min($notas);
    $numeroDeNotas = count($notas);
    $numeroDeNotas2 = sizeof($notas);
    $media = array_sum($notas)/count($notas);

    echo "<p>Max: $max, Min: $min, Media: $media, Cantidad: $numeroDeNotas, Cantidad 2: $numeroDeNotas2</p>";

    foreach($notas as $key => $nota){
        echo "<p>$key => $nota</p>";
    }

    $n = 6;
    echo "<p>$n</p>";

    for($n = 0; $n < 2; ++$n){
        $n = 10;
        $a = 20;
    }

    echo "<p>$a</p>";
?>