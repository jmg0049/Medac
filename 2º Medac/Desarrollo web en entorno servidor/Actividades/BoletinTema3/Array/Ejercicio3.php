<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <h1>Duplicar elementos</h1>
    <?php
$Array = array(1, 2, 3);

foreach ($Array as &$duplicado) {
    $duplicado *= 2;
}

print_r($Array);
?>



</body>
</html>