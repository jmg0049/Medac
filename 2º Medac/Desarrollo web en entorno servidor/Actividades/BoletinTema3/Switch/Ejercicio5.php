<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
    <h1>Escribe un programa que tome una calificación (A, B, C, D, F) como entrada y muestre
un mensaje de retroalimentación basado en la calificación utilizando un switch. Por
ejemplo, si la entrada es "A", podría mostrar "Excelente trabajo".
</h1>
    <?php
$calificacion = 'B';

switch ($calificacion) {
    case 'A':
        echo "Excelente trabajo";
        break;
    case 'B':
        echo "Buen trabajo";
        break;
    case 'C':
        echo "Trabajo promedio";
        break;
    case 'D':
        echo "Trabajo por mejorar";
        break;
    case 'F':
        echo "Trabajo insatisfactorio";
        break;
    default:
        echo "Calificación no válida";
        break;
}
    ?>
</body>
</html>

