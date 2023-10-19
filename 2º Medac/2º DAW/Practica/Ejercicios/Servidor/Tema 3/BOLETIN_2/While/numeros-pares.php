<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <h1>Crea un programa que imprima los números pares del 2 al 20 utilizando un bucle
while:</h1>
    <?php
        $num=2;//variable
        while ($num<=20){//bucle while
            if ($num%2==0) {//condición de par
                echo $num."<br/>";
            }
        $num++;
        }
    ?>
</body>
</html>