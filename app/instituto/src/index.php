<?php
    require_once __DIR__.'/../vendor/autoload.php';
    use Controladores\Alumno;

    $p1 = new Alumno("Alberto", "Puig");
    var_dump($p1);

    $datos = Faker\Factory::create("es_ES");

    for($i = 0; $i < 10; $i++){
        $name = $datos->name();
        $email = $datos->email();
        $alumnos[] = new Alumno($name, $email);
    }

    sort($alumnos);

    usort($alumnos, function ($a, $b) {
        return $a->getEmail() <=> $b->getEmail();
    });

    foreach($alumnos as $alumno){
        echo "<h1>$alumno</h1>";
    }

    var_dump($alumnos);
?>