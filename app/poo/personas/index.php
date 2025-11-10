<?php
    spl_autoload_register(function ($class) {
        if(str_contains($class, "Trait")) {
            require_once "clases/traits/$class.php";
        } else {
            require_once 'clases/'.$class.'.php';
        }
    });
//    $cargar = fn($clase) =>  require_once "clases/$clase.php";
//    spl_autoload_register($cargar);

    $persona1 = new Persona("Paco", "20/07/2005", "Calle del perico");
    $persona2 = new Persona("Paco", "20/07/2005", "Calle del perico");
    $persona3 = new Persona("Paco", "20/07/2005", "Calle del perico");
    $persona4 = new Persona("Paco", "20/07/2005", "Calle del perico");
    $persona5 = new Persona("Paco", "20/07/2005", "Calle del perico");
    $persona6 = new Persona("Paco", "20/07/2005", "Calle del perico");

    unset($persona2, $persona3, $person5, $persona6);
    $persona2 = null;

    $a = new A();
    $b = new B();
    $c = new C();
    $d = new D();


    $html = "";
    $html .= "<p>".$persona1->calcularEdad()."</p>";
    $cantidadPersonas = Persona::getCantidadDePersonas();
    $html .= "<p>Cantidad de personas: $cantidadPersonas</p>";

    $html .= "$a";
    $html .= "$a";
    $html .= "$a";
    $html .= "$a";

    $medico1 = new Medico("Paco", "hola", "", "Cirujano", 10.9);
    $html .= "<p>$medico1</p>";
    $html .= "<p>".$medico1->calcularEdad()."</p>";

    $bailarin1 = new Bailarin("Paco", "hola", "", "Jota");
    $html .= "<p>$bailarin1</p>";
    $html .= "<p>".$bailarin1->calcularEdad()."</p>";

    $cantidadPersonas = Persona::getCantidadDePersonas();
    $html .= "<p>Cantidad de personas: $cantidadPersonas</p>";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
    <?= $html ?>
</body>
</html>
