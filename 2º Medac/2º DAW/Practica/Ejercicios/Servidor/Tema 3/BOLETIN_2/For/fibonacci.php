<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>
<body>
    <h1>Desarrolla un bucle for que genere una secuencia de números Fibonacci con los
primeros 10 términos:</h1>
    <?php
        $i=0;//Primer nº
        $j=1;//Segundo nº
        echo("Si los dos primeros números son: $i y $j ... <br/>
        Entonces la sucesión sería:");
        for ($a = 1; $a <=10; $a++){
            $fibonacci=$i+$j;//fibonacci
            echo "<br/>".$fibonacci;//imprimo 
            $i=$j;//guardo variables
            $j=$fibonacci;
        }
    ?>
</body>
</html>