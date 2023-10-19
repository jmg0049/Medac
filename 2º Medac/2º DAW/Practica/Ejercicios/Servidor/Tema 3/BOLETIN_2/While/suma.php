<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <h1>Escribe un programa que sume los números del 1 al 100 utilizando un bucle while y
luego imprima el resultado:</h1>
    <?php
        $num=1;
        $i=0;//declaro la variable de la suma. Si la meto dentro del while no la reconoce.
        while ($num <= 100){
            $i += $num;//suma el num anterior.
            $num++;
        }echo ("La suma de los números que hay del 1 al 100 es de: $i");
    ?>
</body>
</html>