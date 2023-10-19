<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10</title>
</head>
<body>
    <h1>Crea un array asociativo que almacene información sobre
libros, como título, autor y año de publicación:</h1>
    <?php
        $book = [//array
                "titulo" => "El Principito",
                "autor" => "Antoine de Saint-Exupéry",
                "publicacion" => 1943,
                "titulo_2" => "Cien años de soledad",
                "autor_2" => "Gabriel García Márquez",
                "publicacion_2" => 1967,
                "titulo_3" => "Harry Potter y la piedra filosofal",
                "autor_3" => "J.K. Rowling",
                "publicacion_3" => 1997,
        ];
        echo "Título: " . $book["titulo_3"] . "<br>";//.$book = clave
        echo "Autor: " . $book["autor_3"] . "<br>";
        echo "Año de publicación: " . $book["publicacion_3"] . "<br>";
    ?>
</body>
</html>