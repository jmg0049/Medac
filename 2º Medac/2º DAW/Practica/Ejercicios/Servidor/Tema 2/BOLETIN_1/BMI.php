<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
</head>
<body>
    <h1>Solicita al usuario su peso y altura, y calcula su índice de masa corporal (BMI).
Introducir los datos en el programa.</h1>
    <?php
        $high=1.90;
        $weight=117;
        $bmi=$weight/$high;
        echo ("Si tenemos en cuenta que hay un sujeto con 1.90m de altura y 117kg de peso... <br/>
        El cálculo de su BMI sería de: $bmi");
    ?>
</body>
</html> 