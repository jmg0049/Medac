<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        define("IRPF", 15);
        //Para acceder al valor de una constante no hace falta poner $
        echo IRPF; //CORRECTO
        // echo $IRPF // INCORRECTO
    ?>
</body>
</html>