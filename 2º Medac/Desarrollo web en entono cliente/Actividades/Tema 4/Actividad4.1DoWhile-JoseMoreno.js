var divide = 9; // Definir el número para el cual se generará la tabla de divisiones
let j = 1;
do {
  var resultado = divide / j;
  document.write(divide + " / " + j + " = " + resultado + "<br/>");
  j++;
} while (j <= 10);