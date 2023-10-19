<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <h1>Eliminar duplicados</h1>
    <?php

$Array = array(1, 2, 2, 3, 4, 4, 5);

$arrayUnico = array_unique($Array);

$arrayUnico = array_values($arrayUnico);

print_r($arrayUnico);
?>

</body>
</html>