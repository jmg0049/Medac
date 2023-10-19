<html>
    <?php
    $numero1 = 19;
    $numero2 = 7;
    $numero3 = 10;
    
  if ($numero1 >= $numero2 && $numero1 >= $numero3) {
    echo "El número más grande es: " . $numero1;
} elseif ($numero2 >= $numero1 && $numero2 >= $numero3) {
    echo "El número más grande es: " . $numero2;
} else {
    echo "El número más grande es: " . $numero3;
}
   ?>
</html>