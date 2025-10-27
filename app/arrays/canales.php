<?php
    $url=  "https://raw.githubusercontent.com/MAlejandroR/json_tv/main/tv.json";
    $contenido = file_get_contents($url);
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
//        $contenidojson = json_decode($contenido)[0]->channels;
//
//        foreach($contenidojson as $key => $value){
//            var_dump($value);
//            echo "<a href=\"$value->web\"><img src=\"$value->logo\"> <p>$value->name</p></a>";
//        }


    $contenidojson = json_decode($contenido, true)[0];
    var_dump($contenidojson["channels"][0]);

    foreach($contenidojson['channels'] as $key => $value){
//        echo "<a href=\"".$value["web"]."\"><img src=\"".$value["logo"]."\"/><p>".$value["name"]."</p></a>";
        echo "<a href=\"{$value["web"]}\"><img src=\"{$value["logo"]}\"/><p>{$value["name"]}</p></a>";
    }
    ?>
</body>
</html>
