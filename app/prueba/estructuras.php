<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
    <?php
    //    echo "hola", "me llamo", "Alberto";
    ////    print "hola", "me llamo", "Alberto";
    //
    //    $string = "Alberto";
    //    $int = 10;
    //    $num_bin = 0b00100010;
    //    $num_oct = 0o77674;
    //    $num_hex = 0x7683abCc86;
    //    $num_largo = 10_478_379_384;
    //    $num_cientifico = 1E-9;
    //    $float = 10.01;
    //    $boolean = true;
    //    $null = null;
    //
    //    echo "<h1>String:</h1>";
    //    var_dump($string);
    //    echo "<h1>Números</h1>";
    //    echo "<h1>Integer:</h1>";
    //    var_dump($int);
    //    echo "<h1>Binario:</h1>";
    //    var_dump($num_bin);
    //    echo "<h1>Octal:</h1>";
    //    var_dump($num_oct);
    //    echo "<h1>Hexadecimal:</h1>";
    //    var_dump($num_hex);
    //    echo "<h1>Largo:</h1>";
    //    var_dump($num_largo);
    //    echo "<h1>Científico:</h1>";
    //    var_dump($num_cientifico);
    //    echo "<h1>Decimal:</h1>";
    //    var_dump($float);
    //    echo "<h1>Null:</h1>";
    //    var_dump($null);
    //    echo "<h1>Boolean:</h1>";
    //    var_dump($boolean);
    //
    //    $a = 0.1;
    //    $b = 0.2;
    //    $c = $a+$b;
    //    echo "<h1>Suma:</h1>";
    //    var_dump($c*3);
    //
    //    $a = [1,2,3,4,5,6,7,8,9, [1,2,3,4,5,6,7,8,9]];
    //    echo "<h1>Array:</h1>";
    //    var_dump($a);
    //    echo "<pre>";
    //    print_r($a);
    //    echo "</pre>";
    //    echo json_encode($a);

//        $a = rand(1, 2);
//
//        echo "<h1>Número aleatorio</h1>";
//        echo $a;

//    $tamano = rand(1, 6);
//
//    $r = dechex(rand(1, 255));
//    $g = dechex(rand(1, 255));
//    $b = dechex(rand(1, 255));
//
//    if(strlen($r) == 1) {
//        $r = "0$r";
//    };
//    if(strlen($g) == 1) {
//        $g = "0$g";
//    };
//    if(strlen($b) == 1) {
//        $b = "0$b";
//    };
//
//    $cHex = $r.$g.$b;
//    echo "<p>Tamaño: h$tamano</p>
//    <p>Color: $cHex</p>
//    <p>R: $r</p>
//    <p>G: $g</p>
//    <p>B: $b</p>";
//
//    echo "\n\t<h$tamano  style='color: #$cHex'>Texto</h$tamano>";

    const IVA = 0.16;

    define("IVA_BASE", 0.10);
    echo "<h1>IVA: ".IVA."</h1>";
    echo "<h1>IVA BASE: ".IVA_BASE."</h1>";

    $total = 125 * (1+IVA);
    $total_base = 125 * (1+IVA_BASE);

    
    ?>
</body>
</html>