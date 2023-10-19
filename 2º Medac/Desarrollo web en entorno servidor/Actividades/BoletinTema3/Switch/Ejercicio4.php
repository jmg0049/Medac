<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <h1>Crea un programa que solicite una letra (mayúscula o minúscula) como entrada y
determine si es una vocal utilizando un switch.</h1>
    <?php
$letra = 'a';

switch (strtolower($letra)) {
    case 'a':
    case 'e':
    case 'i':
    case 'o':
    case 'u':
        echo "Es una vocal";
        break;
    default:
        echo "No es una vocal";
        break;
}
    ?>
</body>
</html>