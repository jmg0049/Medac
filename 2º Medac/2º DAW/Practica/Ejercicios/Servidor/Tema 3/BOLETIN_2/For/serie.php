<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10</title>
</head>
<body>
    <h1>Escribe un bucle for que imprima la siguiente serie: 1, 1, 2, 3, 5, 8, 13, 21, ...
:</h1>
    <?php
        $i=0;//Primer nº
        $j=1;//Segundo nº
        echo("Si los dos primeros números son: $i y $j ... <br/>
        Entonces la sucesión sería:");
        for ($a = 1; $a <=20; $a++){
            $fibonacci=$i+$j;//fibonacci
            echo "<br/>".$fibonacci;//imprimo 
            $i=$j;//guardo variables
            $j=$fibonacci;
        }
    ?>
</body>
</html>