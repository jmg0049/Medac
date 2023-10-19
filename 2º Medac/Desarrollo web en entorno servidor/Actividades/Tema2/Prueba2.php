<html>
    <head>
        <title>Prueba de PHP</title>
</head>
<body>
    <?php
    //parte 1
    echo "Hola Mundo!!!";
    //parte 2
    define("IRPF",15);
    echo IRPF; //Correcto
    echo $IRPF; //Incorrecto
    //parte3
    $var=14;
    if (is_int($var)){
        echo "es entero";
       }else{
            echo "no es entero";
        }
    $contenidoVariable="hola";
    echo $contenidoVariable;
    ?>
</body>
</html>