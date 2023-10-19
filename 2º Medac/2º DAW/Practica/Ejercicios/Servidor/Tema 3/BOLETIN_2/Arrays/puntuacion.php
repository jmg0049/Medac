<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9</title>
</head>
<body>
    <h1>Crea un array asociativo que almacene nombres de
jugadores como claves y sus puntuaciones en un juego como valores:</h1>
    <?php
        $points = array(//array
            "Javi" => 10,
            "Ferrera" => 20,
            "Jose" => 30,
            "Álvaro" => 40
        );
        echo "La puntuación de Javi es: " . $points["Javi"] . " pts. <br>";//.$points = clave
        echo "La puntuación de Ferrera es: " . $points["Ferrera"] . " pts. <br>";//imprime
    ?>
</body>
</html>