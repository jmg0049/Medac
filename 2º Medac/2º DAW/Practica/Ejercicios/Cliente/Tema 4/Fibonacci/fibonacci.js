var n = parseInt(prompt("Introduzca un número del 1 al 100: ")); /*La función parseInt() se utiliza para convertir la entrada del usuario en un número entero y asignarlo a la variable n.
Se utiliza prompt() para mostrar un cuadro de diálogo al usuario y solicitarle que introduzca un número.*/
var a = 0, b = 1; //variables
var fibonacci = [a, b];//array

for (var i = 2; i < n; i++) { //For para calcular fibonacci.
    var next = a + b;
    fibonacci.push(next);
    a = b;
    b = next;
}

document.write("La secuencia de Fibonacci con " + n + " términos es: " + fibonacci.join(", "));//alerta del resultado
