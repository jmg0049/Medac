<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
    <h1>Crea un programa que verifique si un estudiante ha aprobado un examen. El
estudiante aprueba si la puntuación es igual o mayor a 60.</h1>
    <?php
        $examen=40;//variable
        echo ("Suponiendo que el alumno haya sacado un $examen en el examen...");//print
        if ($examen>=60){//Estructra if-else
            echo (" Entonces ha aprovado");
        }else{
            echo (" Entonces ha suspendido");       
        }
    ?>
</body>
</html>