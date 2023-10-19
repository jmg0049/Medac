<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
</head>
<body>
    <h1>Crea un programa que imprima todos los números primos del 1 al 50 utilizando un
bucle while:</h1>
    <?php
        $num = 1;//contador
        echo "Números primos del 1 al 50: ";

        while ($num <= 50) {//hasta que llegue al 50
            $divisor = 2;
            $esPrimo = true;//booleano

            while ($divisor <= $num / 2) {//bucle para saber si es primo o no
                if ($num % $divisor == 0) {
                    $esPrimo = false;
                    }
                    $divisor++;
                }

                if ($esPrimo && $num > 1) {
                    echo $num . " ";//Si finalmente lo es, imprimirlo
                }
            $num++;
        }
    ?>
</body>
</html>