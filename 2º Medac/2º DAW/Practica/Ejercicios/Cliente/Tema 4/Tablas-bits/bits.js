var a = 125;//variables
var b = 40;
var c = 25;
var d = 10;

var div = a >> 3; // Desplazamiento a la izquierda de 8 bits
var mul = b << 2; // Desplazamiento a la izquierda de 4 bits
var div1 = c >> 1; // Desplazamiento a la izquierda de 2 bits
var mul1 = d << 4; // Desplazamiento a la izquierda de 16 bits

document.write (a + " / " + 8 + " = " + div + "<br/>");
document.write (b + " x " + 4 + " = " + mul + "<br/>");
document.write (c + " / " + 2 + " = " + div1 + "<br/>");
document.write (d + " x " + 16 + " = " + mul1 + "<br/>");