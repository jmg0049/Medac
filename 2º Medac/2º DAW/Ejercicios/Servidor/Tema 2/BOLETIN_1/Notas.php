<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9</title>
</head>
<body>
    <h1>Realizar un programa que te realice el promedio de las notas de un alumno, para
ello el programa te va a tener que solicitar el nombre del alumno y las notas de las 3
evaluaciones.
Requisitos: Las notas pueden tener decimales.</h1>
    <?php
        $nota1=9;
        $nota2=9;
        $nota3=8;
        $prom=($nota1+$nota2+$nota3)/3;
        echo ("Teniendo en cuenta que el alumno Javier Fdez tiene un $nota1 en el 1º Trimestre, otro $nota2 en el 2º Trimestre y un $nota3 en el 3º Trimestre... <br/>
        El promedio de las notas de este alumno es de: $prom");
    ?>
</body>
</html>