<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9</title>
</head>
<body>
    <h1>Desarrolla un programa que calcule el factorial de un número dado utilizando un
bucle while:</h1>
    <?php
        $num=5;//primer factor
        $fact=1;//segundo factor
        while($num > 0){
            $fact *= $num;//operación
            $num--;
        }
        echo "El factorial es: " . $fact;
    ?>
</body>
</html>