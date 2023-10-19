<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 12</title>
</head>
<body>
    <h1>Igual que el programa anterior, pero esta vez la pirámide estará hueca (se debe
ver únicamente el contorno hecho con asteriscos).</h1>
    <?php
    $var=("&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp *<br/>");
    $var2=("&nbsp&nbsp&nbsp&nbsp&nbsp*&nbsp&nbsp&nbsp&nbsp*<br/>");
    $var3=("&nbsp&nbsp&nbsp*&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp*<br/>");
    $var4=("&nbsp*&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp*<br/>"); //&nbsp = tab
    $var5=("*********<br/>");
    echo $var,$var2,$var3,$var4,$var5;
    ?>
</body>
</html>