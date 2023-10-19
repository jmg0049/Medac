<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <?php
        echo ("Welcome ". $_GET['names']. "<br/>");
        echo ("You are ". $_GET['ages']. " years old."."<br/>");
    ?>
</body>
</html>