<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>
<body>
    <h1>Escribe un programa que utilice un bucle while para imprimir los caracteres de una
cadena de texto de adelante hacia atrás:</h1>
    <?php
        $texto = "Hola, buenas tardes";
        $i = strlen($texto)-1;//recoge la longitud del string
        while ($i >= 0) {//mientras que no sea 0
            echo $texto[$i];//imprime el contenido
            $i--;//invertido
            }
    ?>
</body>
</html>l