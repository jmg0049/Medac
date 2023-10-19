<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <h1>Escribe un bucle for que sume los números del 1 al 100 e imprima el resultado:</h1>
    <?php
        $plus = 0;//declaro suma
            for ($i = 1; $i <= 100; $i++){//for
                $plus += $i;//+= es sumar los nº que genere el for.
            }
            echo $plus;//imprime
    ?>
</body>
</html>