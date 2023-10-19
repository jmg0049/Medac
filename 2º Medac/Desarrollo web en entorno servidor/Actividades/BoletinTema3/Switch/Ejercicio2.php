<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <h1>Escribe un programa que solicite un carácter (letra) como entrada y determine si es
una vocal o una consonante utilizando un switch.</h1>
    <?php
$letra = 'a';

switch ($letra) {
    case 'a':
    case 'e':
    case 'i':
    case 'o':
    case 'u':
        echo "Es una vocal";
        break;
    default:
        echo "Es una consonante";
        break;
}
    ?>
</body>
</html>