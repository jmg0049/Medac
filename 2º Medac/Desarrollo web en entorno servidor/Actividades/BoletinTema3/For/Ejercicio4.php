<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <h1>Desarrolla un programa que utilice un bucle for para imprimir los números del 10 al 1
en orden descendente.</h1>
    <?php
        $suma = 0;
        for ($i = 1; $i <= 100; $i++) {
            $suma += $i;
        }
        echo "La suma de los números del 1 al 100 es: " . $suma;
    ?>
</body>
</html>