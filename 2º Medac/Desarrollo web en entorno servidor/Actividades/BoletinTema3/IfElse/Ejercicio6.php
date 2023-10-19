<html>
    <?php
    function esBisiesto($año) {
        if (($año % 4 == 0 && $año % 100 != 0) || $año % 400 == 0) {
            return true;
        } else {
            return false;
        }
    }
    
    $año = 2020; // Cambia el año aquí para probar diferentes valores
    
    if (esBisiesto($año)) {
        echo $año . " es un año bisiesto.";
    } else {
        echo $año . " no es un año bisiesto.";
    }
   ?>
</html>