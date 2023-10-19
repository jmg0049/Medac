<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 13</title>
</head>
<body>
    <h1>Crea un array de arrays asociativos que almacene registros de
ventas, donde cada registro contiene información sobre el producto (cadena), la
cantidad vendida (entero) y el precio por unidad (decimal):</h1>
    <?php
        $ventas = array(//arrays para el registro 
            array(//array de array
                "producto" => "Manzanas",
                "cantidad" => 5,
                "precio_por_unidad" => 3.99
            ),
            array(
                "producto" => "Peras",
                "cantidad" => 3,
                "precio_por_unidad" => 2.99
            ),
            array(
                "producto" => "Naranjas",
                "cantidad" => 7,
                "precio_por_unidad" => 4.50
            )
        );
        ////////////// P R I M E R  A R R A Y ////////////////
        echo "Producto: " . $ventas[0]["producto"] . "<br>";//.$ventas = clave
        echo "Cantidad vendida: " . $ventas[0]["cantidad"] . "<br>";//[0] para acceder al array en concreto
        echo "Precio por unidad: $" . $ventas[0]["precio_por_unidad"] . "<br>";
        ////////////// S E G U N D O  A R R A Y ////////////////
        echo "Producto: " . $ventas[1]["producto"] . "<br>";
        echo "Cantidad vendida: " . $ventas[1]["cantidad"] . "<br>";
        echo "Precio por unidad: $" . $ventas[1]["precio_por_unidad"] . "<br>";
        ////////////// T E R C E R  A R R A Y ////////////////
        echo "Producto: " . $ventas[2]["producto"] . "<br>";
        echo "Cantidad vendida: " . $ventas[2]["cantidad"] . "<br>";
        echo "Precio por unidad: $" . $ventas[2]["precio_por_unidad"] . "<br>";
    ?>
</body>
</html>