<?php
    function sumar($num1,$num2){//función sumar
        $resultado = $num1 + $num2;//operación
        echo ("$num1 + $num2 = $resultado");//imprime
    }
    
    function restar($num1,$num2){//función restar
        $resultado = $num1 - $num2;//opera
        echo ("$num1 - $num2 = $resultado");//imprime
    }
    
    function multiplica($num1,$num2){//función multiplicar
        $resultado = $num1 * $num2;//opera
        echo ("$num1 x $num2 = $resultado");//imprime
    }
    
    function divide($num1,$num2){//función dividir
        $resultado = $num1 / $num2;//opera
        echo ("$num1 / $num2 = $resultado");//imprime
    }
    
    function esPrimo($num3){//función esPrimo
        $primo = true;
        for ($i = 2; $i < $num3 ; $i++){
            if ($num3 % $i == 0){
                $primo = false;//cambia valor
                break;//corta
            }
        }
        return $primo;
    }
?>