<?php
    if(isset($_POST["submit"]))
        $clicks = ++$_POST["clicks"] ;
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
    <p>Has hecho <?= $clicks??0 ?> clicks</p>

    <form action="index.php" method="post">
        <input type="text" style="display: none" name="clicks" value="<?= $clicks??0 ?>">
        <input type="submit" name="submit" value="sumar">
    </form>
</body>
</html>
