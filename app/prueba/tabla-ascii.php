<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <td>Carácter</td>
            <td>Decimal</td>
            <td>Binario</td>
            <td>Hexadecimal</td>
            <td>Octal</td>
        </tr>
    <?php
            for ($numero = 33; $numero <= 126; $numero++) {
                $numeroChr = chr($numero);
                $numeroBin = decbin($numero);
                $numeroHex = dechex($numero);
                $numeroOct = decoct($numero);

                echo "\n\t\t<tr>";

                echo "\n\t\t\t<td>$numeroChr</td>";
                echo "\n\t\t\t<td>$numero</td>";
                echo "\n\t\t\t<td>$numeroBin</td>";
                echo "\n\t\t\t<td>$numeroHex</td>";
                echo "\n\t\t\t<td>$numeroOct</td>";

                echo "\n\t\t</tr>";
            }

        echo "</table>";






//        for ($numero = 1; $numero <= 15; $numero++) {
//            echo "{decbin($numero)} $numero <br>";
//        }
    ?>
</body>
</html>





