<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
</head>
<body>
    <h1>Crea un programa que determine si un número es múltiplo de 3 y de 5 al mismo
tiempo.</h1>
    <?php
        $num=70;
        if (($num%3==0) && ($num%5==0)){
            echo ("El número $num es múltiplo de 3 y de 5.");
        } else {
            echo ("El número $num no es múltiplo de 3 ni de 5.");
        }
    ?>
</body>
</html>