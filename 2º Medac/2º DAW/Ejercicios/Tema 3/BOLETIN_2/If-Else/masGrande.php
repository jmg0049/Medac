<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <h1>Escribe un programa que compare tres números y muestre el número más grande</h1>
    <?php
        $num1=2;//Declaración de variables
        $num2=1;
        $num3=0;

        if ((($num1<$num2) && ($num2<$num3)) || (($num2<$num1) && ($num1<$num3))){ //Estructura if-elseif-else de condicionante
            echo ("Suponiendo que tenemos los siguientes números: $num1, $num2 y $num3:<br/>
            El número más grande sería $num3."); //Primera opción

        }elseif ((($num2<$num3) && ($num3<$num1)) || (($num3<$num2) && ($num2<$num1))){
            echo ("Suponiendo que tenemos los siguientes números: $num1, $num2 y $num3:<br/>
            El número más grande sería $num1."); //Segunda opción

        }else{echo ("Suponiendo que tenemos los siguientes números: $num1, $num2 y $num3:<br/>
            El número más grande sería $num2.");} //Tercera opción
    ?>
</body>
</html>