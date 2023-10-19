<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <h1>Crea un bucle for que imprima los números pares del 2 al 20:</h1>
    <?php
        for ($a=2; $a<=20;$a++) { //bucle for
            if ($a%2==0){ //condición de par
                echo $a."<br/>";//Imprime
            }
        }
    ?>
</body>
</html>