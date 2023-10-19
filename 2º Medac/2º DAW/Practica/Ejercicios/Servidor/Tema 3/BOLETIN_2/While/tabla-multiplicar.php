<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
    <h1>Crea un programa que utilice un bucle while para imprimir la tabla de multiplicar del
5 (del 5 al 50):</h1>
    <?php
    $num = 5;//numero que es multimplicado
    $mul = 5;//numero multiplicador
        while ($mul <= 50){//while
            $res=$num*$mul;//operación
            echo ("$num x $mul = $res" . "<br/>");
            $mul++;
        }
    ?>
</body>
</html>