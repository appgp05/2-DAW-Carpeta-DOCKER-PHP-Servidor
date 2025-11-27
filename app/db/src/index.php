<?php
    require __DIR__ . '/../vendor/autoload.php';

    use Dotenv\Dotenv;
    use clases\database\Database;

    $dotenv = Dotenv::createImmutable(__DIR__."/..");
    $dotenv->load();

    $database = Database::getInstance();

    var_dump($database->getCon());

    $html = "";

    $tablas = $database->getAllTables();

    foreach($tablas as $key => $tabla){
        $html .= "<p>$tabla</p>";
    }

    $filasFamilia = $database->getTableRows("producto");
    $html .= convertirFilasATablaHTML($filasFamilia);

    function convertirFilasATablaHTML($filas){
        $html = "";
        $html .= "<table>";

        foreach($filas as $key => $fila){
            $html .= "<tr>";

            foreach($fila as $value){
                $html .= "<td>$value</td>";
            }

            $html .= "</tr>";
        }

        $html .= "</table>";

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
    <?= $html ?>
</body>
</html>
