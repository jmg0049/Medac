<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>
<body>
    <h1>Datos Personales</h1>
    <?php
$datosPersonales = array(
    "nombre" => "Alvaro",
    "edad" => 30,
    "correo" => "Alvaro@gmail.com",
    "suscriptor" => true
);

echo "Nombre: " . $datosPersonales["nombre"] . "<br>";
echo "Edad: " . $datosPersonales["edad"] . " años<br>";
echo "Correo Electrónico: " . $datosPersonales["correo"] . "<br>";
echo "¿Es Suscriptor? " . ($datosPersonales["suscriptor"] ? "Sí" : "No") . "<br>";
?>


</body>
</html>