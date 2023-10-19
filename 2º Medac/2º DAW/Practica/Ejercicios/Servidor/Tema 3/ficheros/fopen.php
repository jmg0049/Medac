<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio </title>
</head>
<body>
    <?php
        $fol = fopen ("archivo1.txt","r+");
        if ($fol == false){
            echo "error al abrir el archivo1.txt";
        }
        $fol2 = fopen ("archivo2.txt","w");
        $fol3 = fopen ("archivo3.txt","w");
    ?>
</body>
</html>