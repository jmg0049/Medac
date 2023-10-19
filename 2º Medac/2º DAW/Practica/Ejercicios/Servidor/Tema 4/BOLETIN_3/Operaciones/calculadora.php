<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <h1>Crea un archivo que contenga métodos que realicen suma, resta, division,
multiplicación y esPrimo. Cree otra archivo que use estos métodos.
Usa “require”.</h1>
    <?php
        require 'operaciones.php';
        $num1 = 2;
        $num2 = 4;
        $primo = 11;//primo

        if (esPrimo($primo)){
            echo "El nº $primo es primo";
        }else echo "El nº $primo no es primo";
    ?>
</body>
</html>