<?php
    $submit = $_POST["submit"]??null;

    switch ($submit) {
        case "Adivinar":
            $numeroJugada = 0;
            $maximoJugadas = $_POST["intentos"];
            $numeroMaximo = pow(2, $_POST["intentos"]);
            $numeroMinimo = 0;
            $numeroAdivinando = $numeroMaximo/2;
            break;
        case "Jugar":
            $numeroMinimo = $_POST["numeroMinimo"];
            $numeroMaximo = $_POST["numeroMaximo"];
            $numeroJugada = ++$_POST["numeroJugada"];
            $numeroAdivinando = $_POST["numeroAdivinando"];
            $valorNumeroAAdivinar = $_POST["valorNumeroAAdivinar"];

            switch($valorNumeroAAdivinar){
                case "mayor":
                    $numeroMinimo = $numeroAdivinando;
                    $numeroAdivinando = ($numeroAdivinando + $numeroMaximo)/2;
                    break;
                case "menor":
                    $numeroMaximo = $numeroAdivinando;
                    $numeroAdivinando = ($numeroAdivinando + $numeroMinimo)/2;
                    break;
                case "igual":
                    header("Location: fin.php");
                    break;
            }
            break;
        default:
            header("Location: index.php");
            break;
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
    <h1>Empieza el juego</h1>
    <p>Información y opciones del juego</p>
    <div>
        <p>nº Minimo<?= $numeroMinimo ?></p>
        <p>nº Maximo<?= $numeroMaximo ?></p>
        <p>Jugada nº <?= $numeroJugada ?></p>
        <p>¿El número es <?= $numeroAdivinando ?>?</p>
    </div>
    <form action="jugar.php" method="post">

        <fieldset>
            <legend>El nuúmero a adivinar es</legend>
            <input type="hidden" name="numeroMinimo" value="<?= $numeroMinimo ?>">
            <input type="hidden" name="numeroMaximo" value="<?= $numeroMaximo ?>">
            <input type="hidden" name="numeroJugada" value="<?= $numeroJugada ?>">
            <input type="hidden" name="numeroAdivinando" value="<?= $numeroAdivinando ?>">
            <label><input type="radio" name="valorNumeroAAdivinar" value="mayor">Mayor</label>
            <label><input type="radio" name="valorNumeroAAdivinar" value="menor">Menor</label>
            <label><input type="radio" name="valorNumeroAAdivinar" value="igual">Igual</label>
        </fieldset>

        <div>
            <input type="submit" name="submit" value="Jugar">
            <input type="submit" name="submit" value="Reiniciar">
            <input type="submit" name="submit" value="Volver">
        </div>
    </form>
</body>
</html>
