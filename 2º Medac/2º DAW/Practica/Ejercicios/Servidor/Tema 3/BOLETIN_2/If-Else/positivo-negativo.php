<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <h1>Crea un programa que verifique si un número es positivo, negativo o cero utilizando
una sentencia if.</h1>
    <?php
        $num = 0;
        if ($num == 0){
            echo ("El número $num es cero");
        }elseif ($num > 0){
            echo ("El número $num es positivo");
        }else{ 
            echo ("El número $num es negativo");
        }
    ?>
</body>
</html>