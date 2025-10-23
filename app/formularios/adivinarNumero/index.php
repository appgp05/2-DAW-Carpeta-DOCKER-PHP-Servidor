<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
    <form action="jugar.php" method="post">
        <h1>Juego de Adivinar un Número</h1>
        <p>Selecciona un intervalo del menú</p>
        <label><input type="radio" name="intentos" value="10" checked="checked">1-1.023 (2¹⁰) - 10 intentos</label>
        <label><input type="radio" name="intentos" value="15">1-65.535 (2¹⁵) - 15 intentos</label>
        <label><input type="radio" name="intentos" value="20">1-1.048.575 (2²⁰) - 20 intentos</label>
        <input type="submit" name="submit" value="Adivinar">
    </form>
</body>
</html>
