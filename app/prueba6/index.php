<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
<?php
    $_1 = 2;
    $texto =<<<FINal

    En un lugar
    de la mancha
    de cuyo nombre $_1
    no quiero "acordarme" "$_1"

    FINal;

    echo $texto."<br>";

    $texto =<<<'FINal'

    En un lugar
    de la mancha
    de cuyo nombre $_1
    no quiero "acordarme" "$_1"

    FINal;

echo $texto;
?>
</body>
</html>