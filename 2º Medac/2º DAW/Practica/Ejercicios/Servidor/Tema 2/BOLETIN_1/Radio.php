<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <h1>Cree un algoritmo que toma como dato 7.8 correspondiente a la longitud de un radio
y nos escribe la longitud de la circunferencia, el área del círculo y el volumen de la
esfera que corresponden con dicho radio.</h1>
    <?php
        $radio=7.8;
        $longitud=($radio * 3.14 * 2);//longitud circunferencia
        $volume=(($radio*$radio*$radio)*(4/3)*3.14);//volumen esfera
        echo ("Radio: $radio cm.");
        echo ("<br/>");
        echo ("Longitud de la circunferencia: $longitud cm");
        echo ("<br/>");
        echo ("Volumen de la esfera: $volume m3");
    ?>
</body>
</html>