<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <h1>Crea un array de números enteros y escribe un
programa que cuente cuántos elementos son pares y cuántos son impares en el array:</h1>
    <?php
        $enteros = [1,2,3,4,5,6,7,8,9,10];//array
        $par = 0;//contador de pares
        $imp = 0;//contador de impares
        foreach ($enteros as $num) {//para cada número dentro del array
            if ($num % 2 == 0) {//si es par
                $par++;//incrementa contador par
            }else $imp++;//sino, incrementa contador impar
        }
        echo ("Dentro del array hay $par números pares y $imp números impares");
    ?>
</body>
</html>