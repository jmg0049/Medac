<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>
<body>
    <h1>Número Primo (sin bucles ni sentencias if). Elige el número que quiera:</h1>
    <?php
        $array=array("1","2","3","5","7","11","13","17","19","23","29","31","37","41","43","47","53","59","61","67","71","73","79","83","89","97");
        $random = array_rand($array);//Ordena de forma random el array.
        $num= $array[$random];//Saca un número al azar.
        echo ("El número primo aleatorio que hemos sacado del array es el $num.");//Imprime
    ?>
</body>
</html>