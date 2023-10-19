<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <h1>Crea un array de números enteros y escribe un
programa que calcule la suma de todos los elementos en el array:</h1>
    <?php
        $enteros = [1,2,3,4,5,6,7,8,9,10];//array de enteros.
        echo "La suma de los enteros dentro del array es: ".(array_sum($enteros));//array_sum = suma
    ?>
</body>
</html>