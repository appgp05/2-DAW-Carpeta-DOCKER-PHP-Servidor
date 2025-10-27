<?php
    if(isset($_POST["submit"])){
        $clicks = $_POST["clicks"];

        foreach($clicks as $key => $value){
            if($_POST["submit"] == "Sumar ".$key){
                ++$clicks[$key];
            }
        }
    } else {
        $clicks = ["Juan" => 0, "Alberto" => 0, "Jorge" => 0];
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
    <form action="clicks.php" method="post" style="display: flex; flex-direction: column">
        <?php
            foreach ($clicks as $key => $value) {
                echo "<div>";
                echo "Clicks de $key <input type=\"number\" value=\"$value\" name=\"clicks[$key]\">";
                echo "<input type=\"submit\" value=\"Sumar $key\" name=\"submit\">";
                echo "</div>";
            }
        ?>
    </form>
</body>
</html>