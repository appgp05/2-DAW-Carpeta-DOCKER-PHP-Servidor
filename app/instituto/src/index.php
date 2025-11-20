<?php
    require './../vendor/autoload.php';
    use Class\Alumno;

    $facker = new Faker\Factory::create();

    for($n =0){

    }
    $name = $facker->name();

    $p1 = new Alumno("Alberto", "Puig");
    echo $p1
?>