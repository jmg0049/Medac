<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 12</title>
</head>
<body>
    <h1>Crea un array asociativo que almacene datos personales, como
nombre (cadena), edad (entero), correo electrónico (cadena) y si es suscriptor
(booleano):</h1>
    <?php
        $info = array(//array con los datos personales
            "nombre" => "tsc_javix",
            "edad" => 18,
            "correo" => "ffl0004@alu.medac.es",
            "suscriptor" => true
        );
        echo "Nombre: " . $info["nombre"] . "<br>";//.$info = clave
        echo "Edad: " . $info["edad"] . "<br>";
        echo "Correo Electrónico: " . $info["correo"] . "<br>";
        if ($info["suscriptor"]) {//if para saber si está suscrito o no
            echo "Es sub";
        } else {
            echo "No es sub";
}

    ?>
</body>
</html>