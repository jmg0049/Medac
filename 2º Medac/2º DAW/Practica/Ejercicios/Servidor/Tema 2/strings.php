<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings</title>
</head>
<body>
    <?php
        
        $string="Hello world";
        $a=0;
        $string2=str_replace ("Hello","hola", $string);
        
        echo $string2;
        echo ++$a;
        echo $a++;
        echo $a--;        
        echo --$a;
        
    ?>
</body>
</html>