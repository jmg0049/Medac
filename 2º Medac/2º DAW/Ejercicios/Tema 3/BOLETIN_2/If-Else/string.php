<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>
<body>
    <h1>Escribe un programa que verifique si una cadena de texto tiene más de 10 caracteres
y si es así, la imprima.</h1>
    <?php
        $string = "Hola, ¿cómo están los pibes?";//variable
        if (strlen($string) > 10) {//sentencia if con "strlen" para coger la largura del string.
            echo $string;
        }
    ?>
</body>
</html>