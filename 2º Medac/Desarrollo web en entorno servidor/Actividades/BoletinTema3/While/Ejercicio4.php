<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <h1>Escribe un programa que sume los números del 1 al 100 utilizando un bucle while y
luego imprima el resultado.</h1>
    <?php
      $suma = 0;
      $numero = 1;
      
      while ($numero <= 100) {
          $suma += $numero;
          $numero++;
      }
      
      echo "La suma de los números del 1 al 100 es: " . $suma;
    ?>
</body>
</html>