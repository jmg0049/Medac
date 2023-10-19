<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 11</title>
</head>
<body>
    <h1>Crea un array asociativo que almacene elementos de una lista de
compras, donde las claves son los nombres de los productos (cadenas) y los valores
son las cantidades (números enteros):</h1>
    <?php
        $list = array(//array con la lista de la compra
            "Manzanas" => 5,
            "Plátanos" => 3,
            "Leche" => 2,
            "Barras de Pan" => 1,
            "Huevos" => 12
        );  
        echo "Manzanas: " . $list["Manzanas"] . "<br>";//.$list = clave
        echo "Plátanos: " . $list["Plátanos"] . "<br>";
        echo "Leche: " . $list["Leche"] . "<br>";
        echo "Barras de Pan: " . $list["Barras de Pan"] . "<br>";
        echo "Huevos: " . $list["Huevos"] . "<br>";
    ?>
</body>
</html>