<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <h1>Crea un programa que tome un número del 1 al 7 como entrada y muestre el día de
la semana correspondiente:</h1>
    <?php
        echo ("Introduzca un número correspondiente a un día de la semana (1, 2, 3, 4, 5, 6, 7): ");
        $day = 5;
        switch ($day){
            case 1: 
                echo ("Suponiendo que el número es $day ... El día de la semana correspondiente sería el Lunes");
                break;
            case 2: 
                echo ("Suponiendo que el número es $day ... El día de la semana correspondiente sería el Martes");
                break;
            case 3: 
                echo ("Suponiendo que el número es $day ... El día de la semana correspondiente sería el Miércoles");
                break;
            case 4: 
                echo ("Suponiendo que el número es $day ... El día de la semana correspondiente sería el Jueves");
                break;
            case 5: 
                echo ("Suponiendo que el número es $day ... El día de la semana correspondiente sería el Viernes");
                break;
            case 6: 
                echo ("Suponiendo que el número es $day ... El día de la semana correspondiente sería el Sábado");
                break;
            case 7: 
                echo ("Suponiendo que el número es $day ... El día de la semana correspondiente sería el Domingo");
                break;
        }
    ?>
</body>
</html>