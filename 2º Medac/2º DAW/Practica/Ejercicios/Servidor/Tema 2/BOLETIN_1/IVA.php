<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 14</title>
</head>
<body>
    <h1>Escribe un programa que calcule el total de una factura a partir de la base imponible
(precio sin IVA). La base imponible estará almacenada en una variable.</h1>
    <?php
        $price=80;//precio sin IVA
        $iva=1.21;//21% IVA
        $total=($price*$iva);//Precio CON IVA
        echo ("Si tenemos un producto que cuesta 80€ sin IVA... ¿Cuánto costará si le sumamos el 21% (IVA)?<br/>
        El producto pasará a costar $total € con IVA incluido.");
    ?>
</body>
</html>