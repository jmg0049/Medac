<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10</title>
</head>
<body>
    <h1>Escribe un programa que compare dos cadenas de texto y muestre un mensaje que
indique si son iguales o diferentes.</h1>
    <?php
        $string="Dale a tu cuerpo alegría macarena";
        $string2="Que tu cuerpo es pa darle alegría y cosa buena";
        if($string==$string2){
            echo ("Supongamos que tenemos 2 strings y queremos compararlos: <br/>
            String 1: $string <br/>
            String 2: $string2 <br/>
            En este caso los strings son iguales");
        }else{
            echo ("Supongamos que tenemos 2 strings y queremos compararlos: <br/>
            String 1: $string <br/>
            String 2: $string2 <br/>
            En este caso los strings NO son iguales");
        }
    ?>
</body>
</html>