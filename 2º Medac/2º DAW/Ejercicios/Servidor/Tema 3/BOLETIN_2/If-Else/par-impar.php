<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <h1>Desarrolla un programa que determine si un número es par o impar y lo muestre en
pantalla.</h1>
    <?php
        $num=63;
        if ($num==0){
            echo ("El número $num es cero");
        }elseif ($num%2 == 0){
            echo ("El número $num es par");
        }else{
            echo ("El número $num es impar");
        }
    ?>
</body>
</html>