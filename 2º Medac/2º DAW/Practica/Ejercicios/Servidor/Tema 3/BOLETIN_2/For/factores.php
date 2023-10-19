<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9</title>
</head>
<body>
    <h1>Desarrolla un programa que utilice un bucle for para calcular el factorial de un número
dado:</h1>
    <?php
        $i=1;//Primer nº
        $j=2;//Segundo nº
        echo("Si los dos primeros números son: $i y $j ... <br/>
        Entonces la sucesión de los factores sería:");
        for ($a = 1; $a <=10; $a++){
            $factor=$i*$j;//Cálculo factores
            echo "<br/>".$factor;//imprimo 
            $i=$j;//guardo variables
            $j=$factor;
        }
    ?>
</body>
</html>