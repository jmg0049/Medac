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
        $mul=5;
        $num=5;
        
        while ($mul <= 50){
            $ope=$num*$mul;
            echo ("$num x $mul = $ope <br/>");
            $mul++;
        }
    ?>
</body>
</html>