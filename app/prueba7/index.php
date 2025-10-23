<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <style>
        * {
            font-family: "Courier New", monospace;
            white-space: pre; /* Mantener los espacios tal cual */
        }
    </style>
</head>
<body>
<?php
    $cliente = "Juan Pérez";
    $fecha = date("d/m/Y");
    $factura = 1;
    $producto1 = "Cuadros";
    $precio1 = rand(1, 100);
    $producto2 = "Luminarias intensas";
    $precio2 = rand(1, 100);
    $total = $precio1 + $precio2;


    $separadoresFactura = str_repeat("=", 42);

    function centrarTexto($texto)
    {
        $espacios = 42/2 - (strlen($texto))/2;
        $textoAdaptado = str_repeat(" ", $espacios).$texto;
        return $textoAdaptado;
    }

    function justificarTexto($texto, $textoizquierda)
    {
        $espacios = 42 - strlen($texto) - strlen($textoizquierda);

        $textoAdaptado = str_repeat(" ", $espacios).$texto;

        return $textoAdaptado;
    }

    $factura = centrarTexto("Factura Nº".$factura);
    $precio1 = justificarTexto($precio1, $producto1);
    $precio2 = justificarTexto($precio2, $producto2);
    $total = justificarTexto($total, "Total:");

    $texto =<<<FINAL
        $separadoresFactura
        $factura
        $separadoresFactura
        $producto1$precio1
        $producto2$precio2
        Total:$total
    FINAL;

    echo $texto;

?>
</body>
</html>