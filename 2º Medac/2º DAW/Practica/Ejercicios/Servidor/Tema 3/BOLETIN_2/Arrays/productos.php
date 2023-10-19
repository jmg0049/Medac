<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>
<body>
    <h1>Crea un array asociativo que almacene nombres de productos
como claves y sus precios como valores:</h1>
    <?php
        $productos = array(//array
            "Producto1" => 19.99,//declaración de precios
            "Producto2" => 29.95,
            "Producto3" => 15.50,
            "Producto4" => 24.99
        );
        echo "El precio del Producto1 es: " . $productos["Producto1"] . " euros.<br>";//.$productos = clave
        echo "El precio del Producto2 es: " . $productos["Producto2"] . " euros.<br>";//imprime
    ?>
</body>
</html>