<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <h1>Crea un array de números enteros y duplica cada elemento en
el array. Por ejemplo, si tienes [1, 2, 3], el resultado debería ser [2, 4, 6]:</h1>
    <?php
        function duplicar($a){//función duplicar
            return($a*2);//multiplica x2
        }
        $b = array(1,2,3);//array
        foreach ($b as $a) {//para cada [$a] que se aplique la función duplicar.
        $dup = array_map("duplicar",$b);
        }
        print_r($b);
        print_r($dup);
    ?>
</body>
</html>