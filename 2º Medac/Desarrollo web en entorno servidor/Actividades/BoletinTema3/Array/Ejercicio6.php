<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>
<body>
    <h1>Puntuacion de un juego</h1>
    <?php

$puntuaciones = array(
    "Ferrera" => 0,
    "David" => 85,
    "Alvaro" => 92,
    "Gabriel" => 78
);

echo "Puntuación de Juan: " . $puntuaciones["Juan"] . "<br>";
echo "Puntuación de María: " . $puntuaciones["María"] . "<br>";
echo "Puntuación de Carlos: " . $puntuaciones["Carlos"] . "<br>";
echo "Puntuación de Luisa: " . $puntuaciones["Luisa"] . "<br>";
?>

</body>
</html>