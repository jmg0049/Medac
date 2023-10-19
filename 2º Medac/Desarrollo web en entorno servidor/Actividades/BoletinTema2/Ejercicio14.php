<html>
    <head>
    <title>Ejercicio14</title>
    </head>
    <body>
    <?php
$baseImponible = 100.00; 
$ivaPorcentaje = 21;
$iva = ($baseImponible * $ivaPorcentaje) / 100; 
$total = $baseImponible + $iva; 
echo "Base Imponible: $baseImponible €<br>";
echo "IVA ($ivaPorcentaje%): $iva €<br>";
echo "Total a pagar: $total €<br>";
    ?>   
    </body>
</html>