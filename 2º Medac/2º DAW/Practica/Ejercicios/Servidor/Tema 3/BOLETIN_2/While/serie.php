<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10</title>
</head>
<body>
    <h1>Escribe un programa que imprima la siguiente serie: 1, 1, 2, 3, 5, 8, 13, 21, ... utilizando
un bucle while:</h1>
    <?php
        $num=0;//primer número
        $num2=1;// segundo número
        echo "Si tenemos en cuenta que los dos primeros dígitos son: $num y $num2 <br/>
        La serie sería la siguiente: ";
        $i=0;//contador

        while ($i <= 10){//si el contador llega a 10
            $sum=$num+$num2;//la suma de los números anteriores
            $num=$num2;//recoge nuevo valor el primer número
            $num2=$sum;//segundo número recoge la suma de los anteriores.
            echo ($sum. ", ");//imprime
            $i++;//incrementa
        }
    ?>
</body>
</html>