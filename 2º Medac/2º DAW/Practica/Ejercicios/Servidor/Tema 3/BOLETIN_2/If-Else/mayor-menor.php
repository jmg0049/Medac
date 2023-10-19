<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <h1>Escribe un programa en PHP que compare dos números enteros e imprima "El primer
número es mayor" si el primer número es mayor que el segundo</h1>
    <?php
        $num1=5;
        $num2=3;
        echo ("Si tenemos en cuenta que hemos declarado los números como $num1 y $num2<br/>");
        if($num1>$num2){
            echo "Entonces, el primer número es mayor";
        }else{
            echo "Entonces, el segundo número es mayor";
        }
    ?>
</body>
</html>