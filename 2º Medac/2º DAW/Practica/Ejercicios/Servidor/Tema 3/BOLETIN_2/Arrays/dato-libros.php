<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 15</title>
</head>
<body>
    <h1>Crea un array de arrays asociativos que almacene información sobre
libros, donde cada libro tiene un título (cadena), un autor (cadena), un año de
publicación (entero) y una lista de palabras clave (array de cadenas):</h1>
    <?php
        $books = array(//array de libros
            array(//array de array
                "title" => "El Gran Gatsby",
                "author" => "F. Scott Fitzgerald",
                "year" => 1925,
                "category" => array("novela", "drama", "fiesta")//array de array para las categorías
            ),
            array(
                "title" => "Cien años de soledad",
                "author" => "Gabriel García Márquez",
                "year" => 1967,
                "category" => array("realismo mágico", "familia", "amor")
            ),
            array(
                "title" => "1984",
                "author" => "George Orwell",
                "year" => 1949,
                "category" => array("distopía", "vigilancia", "totalitarismo")
            )
        );
        $title = $books[0]["title"];//variable para acceder al array de libros, primer array y sacar el título.
        $category = $books[1]["category"];//idem, para las categorías del 2º libro.
        echo "El título del 1º libro es: $title<br/>";
        echo "Las categorías del 2º libro son: ".$category[0];
        echo "El autor del 3º libro es: " . $books[2]["author"];//Imprimir el autor del tercer libro.

    ?>
</body>
</html>