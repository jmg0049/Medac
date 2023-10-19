<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <h1>Calcula el número de horas que hay en 14 años</h1>
    <?php
        $years=14;//Número de años
        $days=($years*365);//días
        $hours=($days*24);//horas
        echo ("$hours horas hay en $years años");
    ?>
</body>
</html>