<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <h1>Escribe un programa que solicite un carácter (letra) como entrada y determine si es
una vocal o una consonante utilizando un switch:</h1>
    <?php
        $var = "A";
        switch ($var){
            case "a": echo ("El carácter ingresado '$var' es una vocal.");
                break;
            case "e": echo ("El carácter ingresado '$var' es una vocal.");
                break;
            case "i": echo ("El carácter ingresado '$var' es una vocal.");
                break;
            case "o": echo ("El carácter ingresado '$var' es una vocal.");
                break;
            case "u": echo ("El carácter ingresado '$var' es una vocal.");
                break;

            default: echo ("El carácter ingresado '$var' es una consonante.");
            break;
        }
    ?>
</body>
</html>