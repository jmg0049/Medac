<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
    <h1>Crea un programa que utilice un bucle for para imprimir la tabla de multiplicar del 5
(del 5 al 50)</h1>
    <?php
        for ($i = 5; $i <= 50; $i += 5) {
            echo "5 x " . $i/5 . " = " . $i . "\n";
        }
    ?>
</body>
</html>