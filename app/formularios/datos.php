<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
    <?php
    $operando1 = $_POST['operando1'];
    $operador = $_POST['operador'];
    $operando2 = $_POST['operando2'];

    $resultado = 0;

    $operacion = $operando1." ".$operador." ".$operando2;

    $msj="";
    if(!is_numeric($operando1) || !is_numeric($operando2)){
        $msj="La opreación ".$operacion." no es valida";
    }
    if($operador == ":" && $operando2 == "0"){
        $msj="La opreación ".$operacion." no es valida";
    }

    if($msj=="") {
        switch ($operador) {
            case '+':
                $resultado = $operando1 + $operando2;
                break;
            case '-':
                $resultado = $operando1 - $operando2;
                break;
            case '*':
                $resultado = $operando1 * $operando2;
                break;
            case '/':
                $resultado = $operando1 / $operando2;
                break;
        }
        $msj = "El resultado de la operación ".$operacion." es ".$resultado;
    }
    echo $msj;
    ?>
</body>
</html>