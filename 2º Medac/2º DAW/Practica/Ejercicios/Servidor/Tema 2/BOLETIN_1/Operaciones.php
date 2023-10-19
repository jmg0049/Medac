<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <h1>Cree un algoritmo que con el número 70 y 35, calcule y muestre el valor de sus suma,
resta, producto y división:</h1>
    <?php
        $a=70;
        $b=35;
        $suma=$a+$b;
        echo ("La suma de $a + $b = $suma");
        echo ("<br/>");
        $resta=$a-$b;
        echo ("La resta de $a - $b = $resta");
        echo ("<br/>");
        $multiplicacion=$a*$b;
        echo ("La multiplicación de $a * $b = $multiplicacion");
        echo ("<br/>");
        $division=$a/$b;
        echo ("La división de $a * $b = $division");

    ?>
</body>
</html>