<?php
    $productos = [
        'lechuga' => ['unidades' => 200,
            'precio' => 0.90],
        'tomates' =>['unidades' => 2000,
            'precio' => 2.15],
        'cebollas' =>['unidades' => 3200,
            'precio' => 0.49],
        'fresas' =>['unidades' => 4800,
            'precio' => 4.50],
        'manzanas' =>['unidades' => 2500,
            'precio' => 2.10],
    ];

    function mostrarFormulario(array $productos): string{
        $html = "<form action=\"listadoProductos.php\" method=\"post\">";

        foreach($productos as $key => $value){
            $html .= "
                <div>
                        <h1>$key</h1>
                        <p>{$value["unidades"]} unidades</p>
                        <p>{$value["precio"]}€</p>
                        <input type='number' name='unidadesProductos[$key]' value='0'>
                </div>";
        }
        $html .= "<input type='submit' name='submit' value='Comprar'>";
        $html .= "</form>";

        return $html;
    }
    function mostrarFactura($productos): string{
        $html = "";

        $unidadesProductos = $_POST["unidadesProductos"];
        var_dump($unidadesProductos);

        foreach($unidadesProductos as $key => $value){
            $precioUnidad = $productos[$key]["precio"];
            $precioTotal = $productos[$key]["precio"]*$value;

            if($value > 0){
                $html .= "<p> - $key * $value | {$precioUnidad}€/u | {$precioTotal}</p>";
            }
        }

        return $html;
    }
    function mostrarInventario($productos): string{
        $html = "";

        $unidadesProductos = $_POST["unidadesProductos"];

        foreach($productos as $key => $value){
            $unidadesFinales = $value["unidades"] - $unidadesProductos[$key];
            $html .= "
                <div>
                        <h1>$key</h1>
                        <p>{$unidadesFinales} unidades</p>
                        <p>{$value["precio"]}€</p>
                </div>";
        }

        return $html;
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
    <?php
        if (isset($_POST['submit'])){
            //Mostrar inventario y factura
            echo mostrarFactura($productos);
            echo mostrarInventario($productos);
        } else {
            //Mostrar formulario
            echo mostrarFormulario($productos);
        }
    ?>
</body>
</html>