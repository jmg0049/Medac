<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>
<body>
    <h1>Puntuacion jugadores</h1>
    <?php

$puntuacionesJugadores = array(
    "Jugador1" => array(10, 15, 20),
    "Jugador2" => array(5, 12, 18),
    "Jugador3" => array(8, 14, 22)
);

$jugador = "Jugador2";
echo "Puntuaciones de $jugador: " . implode(", ", $puntuacionesJugadores[$jugador]) . "<br>";
?>

</body>
</html>