<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <h1>Crea un programa que solicite una letra (mayúscula o minúscula) como entrada y
determine si es una vocal utilizando un switch:</h1>
    <?php
        $var = "A";
        switch ($var){
            case "A": echo ("El carácter ingresado '$var' es una vocal.");
                break;
            case "a": echo ("El carácter ingresado '$var' es una vocal.");
                break;
            case "E": echo ("El carácter ingresado '$var' es una vocal.");
                break;
            case "e": echo ("El carácter ingresado '$var' es una vocal.");
                break;
            case "I": echo ("El carácter ingresado '$var' es una vocal.");
                break;
            case "i": echo ("El carácter ingresado '$var' es una vocal.");
                break;
            case "O": echo ("El carácter ingresado '$var' es una vocal.");
                break;
            case "o": echo ("El carácter ingresado '$var' es una vocal.");
                break;
            case "U": echo ("El carácter ingresado '$var' es una vocal.");
                break;
            case "u": echo ("El carácter ingresado '$var' es una vocal.");
                break;

            default: echo ("Porfavor, inserte una vocal");
            break;
        }
    ?>
</body>
</html>