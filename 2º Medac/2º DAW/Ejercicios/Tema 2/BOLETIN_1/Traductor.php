<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10</title>
</head>
<body>
    <h1>Escribe un programa que muestre por pantalla 10 palabras en inglés junto a su
correspondiente traducción al castellano. Las palabras deben estar distribuidas en
dos columnas y alineadas a la izquierda. Se prtende que os familiareceis con el uso
de string y su impresión por pantalla concatenando...</h1>
    <?php
        $word=("Computer    &nbsp &nbsp &nbsp &nbsp                                     ordenador <br/>");
        $word2=("Student     &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp                         alumn@ <br/>");
        $word3=("Cat         &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp       gato <br/>");
        $word4=("Penguin     &nbsp &nbsp &nbsp &nbsp &nbsp                               pingüino <br/>");
        $word5=("Machine     &nbsp &nbsp &nbsp &nbsp &nbsp                               máquina <br/>");
        $word6=("Nature      &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp                         naturaleza <br/>");
        $word7=("Light       &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp                   luz <br/>");
        $word8=("Green       &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp                         verde <br/>");
        $word9=("Book        &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp                   libro <br/>");
        $word10=("Pyramid     &nbsp &nbsp &nbsp &nbsp                                     pirámide <br/>");//el &nbsp es el <<tab>>

        echo $word,$word2,$word3,$word4,$word5,$word6,$word7,$word8,$word9,$word10;
    ?>
</body>
</html>