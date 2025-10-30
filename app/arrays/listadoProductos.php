<?php
    $productos = [
        'lechuga' => ['unidades' => 200, 'precio' => 0.90],
        'tomates' =>['unidades' => 2000, 'precio' => 2.15],
        'cebollas' =>['unidades' => 3200, 'precio' => 0.49],
        'fresas' =>['unidades' => 4800, 'precio' => 4.50],
        'manzanas' =>['unidades' => 2500, 'precio' => 2.10],
    ];
    function mostrarFormulario(array $productos): string{
        $html = "";
        $html .= "<form id=\"formularioProductos\" action=\"listadoProductos.php\" method=\"post\">";
        $html .= "<div>";
        $html .= "<h1>Formulario de compra</h1>";
        $html .= "<p>Por favor introduzca los productos a comprar</p>";
        $html .= "</div>";
        $html .= "<div class=\"productos\">";
        foreach($productos as $key => $value){
            $nombre = strtoupper($key);
            $html .= "
                <div>
                        <h1>$nombre</h1>
                        <p>{$value["unidades"]} unidades</p>
                        <p>{$value["precio"]}€</p>
                        <input type='number' name='unidadesProductos[$key]' value='0'>
                </div>";
        }
        $html .= "</div>";
        $html .= "<div class='boton'><input type='submit' name='submit' value='Comprar'></div>";
        $html .= "</form>";

        return $html;
    }
    function mostrarFactura($productos): string{
        $html = "";

        $unidadesProductos = $_POST["unidadesProductos"];
        foreach($unidadesProductos as $key => $value){
            $unidadesProductos[$key] = filter_var($unidadesProductos[$key], FILTER_VALIDATE_INT);
        }
        var_dump($unidadesProductos);

        $html .= "<div id='facturaProductos'>";
        $html .= "<h1>Factura</h1>";
        $html .= "<div>";
        $htmlProductos = "";
        foreach($unidadesProductos as $key => $value){
            if($value > $productos[$key]["unidades"]){
                $value = $productos[$key]["unidades"];
            }
            $nombre = strtoupper($key);
            $precioUnidad = $productos[$key]["precio"];
            $precioTotal = $productos[$key]["precio"]*$value;

            if($value > 0){
                $htmlProductos .= "<p> - $nombre * $value | {$precioUnidad}€/u | {$precioTotal}</p>";
            }
        }
        if($htmlProductos != ""){
            $html .= $htmlProductos;
        } else {
            $html .= "<p>No ha comprado ningún producto</p>";
        }
        $html .= "<form action='listadoProductos.php' method='post'>";
        $html .= "<input type='submit' name='submit' value='Volver a comprar'>";
        $html .= "</form>";
        $html .= "</div>";
        $html .= "</div>";

        return $html;
    }
    function mostrarInventario($productos): string{
        $html = "";

        $unidadesProductos = $_POST["unidadesProductos"];
        foreach($unidadesProductos as $key => $value){
            $unidadesProductos[$key] = filter_var($unidadesProductos[$key], FILTER_VALIDATE_INT);
        }

        $html .= "<div id=\"inventarioProductos\">";
        $html .= "<h1>Inventario Productos</h1>";
        $html .= "<div class=\"productos\">";
        foreach($productos as $key => $value){
            $nombre = strtoupper($key);
            $unidadesFinales = 0;
            if(($value["unidades"] - (int) $unidadesProductos[$key]) > 0){
                $unidadesFinales = $value["unidades"] - (int) $unidadesProductos[$key];
            }
            $html .= "
                <div>
                        <h1>{$nombre}</h1>
                        <p>{$unidadesFinales} unidades</p>
                        <p>{$value["precio"]}€</p>
                </div>";
        }

        $html .= "</div>";
        $html .= "</div>";

        return $html;
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <link rel="stylesheet" href="listadoProductos.css">
</head>
<body>
    <?php
        if (isset($_POST['submit']) && $_POST['submit'] == "Comprar"){
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