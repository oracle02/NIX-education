<?php

    if(isset($_POST['str'])){
        echo strrev($_POST['str']);
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style3.css">
    <title>Document</title>
</head>
<body>
    <form action="lesson3.php" method="post">
    <label for="">Введите текст: <input type="text" name="str"></label>
    </form>
</body>
</html>