<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>
<body>
    <h1>Escribe un programa que utilice un bucle for para imprimir los caracteres de una
cadena de texto de atrás hacia adelante:</h1>
    <?php
        $texto="Cadena de texto";
        for ($i = strlen($texto) - 1; $i >= 0; $i--) { //Si la variable $i es = a la longitud del texto -1. Y es >= 0; Que decremente el valor de $i.
            echo $texto[$i];//Imprimir el valor [$i] dentro del string.
        }
    ?>
</body>
</html>