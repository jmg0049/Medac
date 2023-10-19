<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
    <h1>Crea un array que contenga elementos duplicados y escribe un
programa que elimine los duplicados y devuelva un nuevo array con elementos
únicos. Por ejemplo, si tienes [1, 2, 2, 3, 4, 4, 5], el resultado debería ser [1, 2, 3, 4, 5]:</h1>
    <?php
        $array = [1, 2, 2, 3, 4, 4, 5];//Array con elementos duplicados
        function eliminarDuplicados($arr) {//Función para eliminar duplicados
            return array_values(array_filter($arr, function ($valor, $indice) use ($arr) {//array_values = valores //array_filter = filtro de valores a cumplir para el nuevo array
                return array_search($valor, $arr) === $indice;//array_search = buscar dentro del array
            }, ARRAY_FILTER_USE_BOTH));//=== comparar con el índice
        }
        $array2 = eliminarDuplicados($array);//Llamar a la función para obtener el nuevo array sin duplicados
        print_r($array2);
    ?>
</body>
</html>