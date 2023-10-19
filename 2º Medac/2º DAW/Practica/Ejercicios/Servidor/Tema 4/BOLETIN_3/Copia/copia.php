<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <?php
        $origen = 'origen.txt';//insertar el nombre del archivo
        $destino = 'destino.txt';//insertar el nombre del archivo
        
        $contenido = file_get_contents($origen);//copia el contenido de origen
        file_put_contents($destino, $contenido);//lo escribe en el destino
    ?>
</body>
</html>