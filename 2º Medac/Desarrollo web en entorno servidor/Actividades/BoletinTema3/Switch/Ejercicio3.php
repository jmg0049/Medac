<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <h1>Desarrolla un programa que solicite un número del 1 al 12 como entrada y muestre
el nombre del mes correspondiente.</h1>
    <?php
$numero = 7;

switch ($numero) {
    case 1:
        echo "Enero";
        break;
    case 2:
        echo "Febrero";
        break;
    case 3:
        echo "Marzo";
        break;
    case 4:
        echo "Abril";
        break;
    case 5:
        echo "Mayo";
        break;
    case 6:
        echo "Junio";
        break;
    case 7:
        echo "Julio";
        break;
    case 8:
        echo "Agosto";
        break;
    case 9:
        echo "Septiembre";
        break;
    case 10:
        echo "Octubre";
        break;
    case 11:
        echo "Noviembre";
        break;
    case 12:
        echo "Diciembre";
        break;
    default:
        echo "Número inválido";
        break;
}
    ?>
</body>
</html>