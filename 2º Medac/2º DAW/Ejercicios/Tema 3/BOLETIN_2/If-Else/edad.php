<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9</title>
</head>
<body>
    <h1>Desarrolla un programa que verifique si una persona es mayor de edad (mayor de 18
años) en función de su año de nacimiento.</h1>
    <?php
        $edad=17;
        if ($edad >= 18) {
            echo ("Suponemos que una persona tiene $edad años. Entonces esa persona es mayor de edad");
        } else {
            echo ("Suponemos que una persona tiene $edad años. Entonces esa persona NO es mayor de edad");
        }
    ?>
</body>
</html>