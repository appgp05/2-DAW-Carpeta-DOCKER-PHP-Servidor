<?php
    require_once ("Racional.php");
    $r1 = new Racional(5, 5);  // 5/5
    $r1Simplificado = $r1->simplificar();
    $r2 = new Racional();                           // 1/1
    $r2Simplificado = $r2->simplificar();
    $r3 = new Racional(25);               // 25/1
    $r3Simplificado = $r3->simplificar();
    $r4 = new Racional(7, 9);  // 7/9
    $r4Simplificado = $r4->simplificar();
    $r5 = new Racional("8/7");            // 8/7
    $r5Simplificado = $r5->simplificar();
    $suma = new Racional("8/5")->sumar(new Racional("10/5"));
    $sumaSimplificado = $suma->simplificar();
    $resta = new Racional("8/5")->restar(new Racional("10/5"));
    $restaSimplificado = $resta->simplificar();
    $multiplicacion = new Racional("8/4")->multiplicar(new Racional("12/3"));
    $multiplicacionSimplificado = $multiplicacion->simplificar();
    $division = new Racional("8/4")->dividir(new Racional("12/3"));
    $divisionSimplificado = $division->simplificar();
    $simplificar = new Racional("8/4")->simplificar(new Racional("14/28"));

    $htmlEchoRacionales = "";
    $htmlEchoRacionales .= "<p>Valor del r1: $r1, simplificado: $r1Simplificado</p>";
    $htmlEchoRacionales .= "<p>Valor del r2: $r2, simplificado: $r2Simplificado</p>";
    $htmlEchoRacionales .= "<p>Valor del r3: $r3, simplificado: $r3Simplificado</p>";
    $htmlEchoRacionales .= "<p>Valor del r4: $r4, simplificado: $r4Simplificado</p>";
    $htmlEchoRacionales .= "<p>Valor del r5: $r5, simplificado: $r5Simplificado</p>";
    $htmlEchoRacionales .= "<p>Valor de la suma: $suma, simplificado: $sumaSimplificado/p>";
    $htmlEchoRacionales .= "<p>Valor de la resta: $resta, simplificado: $restaSimplificado</p>";
    $htmlEchoRacionales .= "<p>Valor de la multiplicacion: $multiplicacion, simplificado: $multiplicacionSimplificado</p>";
    $htmlEchoRacionales .= "<p>Valor de la division: $division, simplificado: $divisionSimplificado</p>";
    $htmlEchoRacionales .= "<p>Valor de la simplificacion: $simplificar, simplificado: $multiplicacionSimplificado</p>";

//    $a = $r5->descomponerFactorialmente(10);
//    $htmlEchoRacionales .= "<p>Valor del a: $a</p>";

    $htmlEchoRacionales;

    $submit = $_POST['submit']??null;

    switch ($submit) {
        case "Crear":
            $racional = new Racional($_POST['numeroRacional']);
            $htmlEchoRacionales .= "<p>$racional</p>";
            break;
        case "Calcular":
            $racional1 = new Racional($_POST['racional1']);
            $racional2 = new Racional($_POST['racional2']);
            $operacion = $_POST['operacion'];
            switch ($operacion) {
                case "+":
                    $resultadoOperacion = $racional1->sumar($racional2);
                    break;
                case "-":
                    $resultadoOperacion = $racional1->restar($racional2);
                    break;
                case "*":
                    $resultadoOperacion = $racional1->multiplicar($racional2);
                    break;
                case "/":
                    $resultadoOperacion = $racional1->dividir($racional2);
                    break;
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
    <?= $htmlEchoRacionales ?>

    <form action="index.php" method="post">
        <h1>Crear un Racional nuevo</h1>
        <input type="text" name="numeroRacional">
        <input type="submit" name="submit" value="Crear">
    </form>
    <form action="index.php" method="post">
        <input type="text" name="racional1">
        <select name="operacion" id="">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="text" name="racional2">
        <input type="submit" name="submit" value="Calcular">

        <h1>Resultado:</h1>
        <p><?= $resultadoOperacion??"" ?></p>
    </form>
</body>
</html>