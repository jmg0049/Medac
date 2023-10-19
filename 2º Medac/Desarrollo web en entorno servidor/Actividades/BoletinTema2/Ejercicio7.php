<html>
    <head>
    <title>Ejercicio7</title>
    </head>
    <body>
    <?php
    //Literalmente buscado en chatgpt
    $numero=17;
    $isPrimo= ($numero < 2) ? false : (($numero == 2) ? true : (($numero % 2 == 0) ? false : true));
    echo $numero.($isPrimo ? " es numero primo." : " no es numero primo.");
    ?>   
    </body>
</html>