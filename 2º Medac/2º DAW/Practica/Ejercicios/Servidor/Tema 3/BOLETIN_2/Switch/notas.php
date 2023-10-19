<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
    <h1>Escribe un programa que tome una calificación (A, B, C, D, F) como entrada y muestre
un mensaje de retroalimentación basado en la calificación utilizando un switch. Por
ejemplo, si la entrada es "A", podría mostrar "Excelente trabajo":</h1>
    <?php
        $cal = "A";//nota
        switch ($cal){
            case "A":
                echo ("Excelente trabajo");
            break;

            case "B":
                echo ("Muy buen trabajo");
            break;

            case "C":
                echo ("Buen trabajo");
            break;

            case "D":
                echo ("Suficiente");
            break;

            case "E":
                echo ("Insuficiente");
            break;
        }
    ?>
</body>
</html>l