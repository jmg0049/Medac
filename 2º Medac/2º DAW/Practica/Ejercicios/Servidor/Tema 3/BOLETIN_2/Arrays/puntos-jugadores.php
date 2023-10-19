<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 14</title>
</head>
<body>
    <h1>Crea un array asociativo que almacene puntuaciones
de jugadores en un juego, donde las claves son los nombres de los jugadores
(cadenas) y los valores son arrays que contienen puntuaciones (números enteros):</h1>
    <?php
        $ptsJ = array(//array con los jugadores
            "Javi" => array(10, 15, 20),//array de array
            "Ferrera" => array(25, 30, 15),
            "Álvaro" => array(18, 22, 28)
        );
        $pts = $ptsJ["Javi"];//variable para acceder al array de javi
        $pt1 = $pts[0];//variable para acceder las puntuaciones de Javi
        echo "La primera puntuación de Javi es: " . $pt1;//imprimo

    ?>
</body>
</html>l