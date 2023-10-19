<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
</head>
<body>
    <h1>Crea un array asociativo que almacene nombres de
estudiantes como claves y sus calificaciones como valores:</h1>
    <?php
        $notas = array(//array
            "Estudiante1" => 9.7,//declaraciíon de las notas
            "Estudiante2" => 7.9,
            "Estudiante3" => 5.8,
            "Estudiante4" => 4.9
        );
        echo "La calificación de Estudiante1 es: " . $notas["Estudiante1"] . "<br>";//.$notas = clave
        echo "La calificación de Estudiante2 es: " . $notas["Estudiante2"] . "<br>";//imprime
    ?>
</body>
</html>