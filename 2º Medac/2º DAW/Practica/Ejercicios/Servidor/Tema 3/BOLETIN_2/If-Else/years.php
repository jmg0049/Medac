<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejericio 6</title>
</head>
<body>
    <h1>Desarrolla un programa que determine si un año es bisiesto o no. Un año es bisiesto
si es divisible por 4, excepto aquellos divisibles por 100 pero no por 400.</h1>
    <?php
        $year=2028;//variable

        //Estructura if-else
        if (($year%4)==0)//Si es divisible x 4.
        {   
            if ((($year%100)==0) && (($year%400))!=0){//Si es divisible x 100, pero no x 400...
                echo ("El año $year no es bisiesto");
            }
            else{echo ("El año $year es bisiesto");}
        }else{
            echo ("El año $year no es bisiesto");
        }
    ?>
</body>
</html>