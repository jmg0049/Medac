//Tablas de multiplicar, suma y división
var n = 1, n2 = 7;//nº multiplicador y nº que es multiplicado
var a = 1, a2 = 8;//nº que suma y nº sumado
var c = 1, c2 = 9;//nº divisor y dividendo

document.write ("--------------------------------<br/>");
document.write ("TABLA MULTIPLICAR " + n2 + "<br/>");
document.write ("--------------------------------<br/>");


for (var n; n <= 10; n++){//for para la multiplicación
    var opr = n2*n;
    document.write (n2 + " x " + n + " = " + opr + "<br/>");
}

document.write ("--------------------------------<br/>");
document.write ("SUMA DEL Nº " + a2 + "<br/>");
document.write ("--------------------------------<br/>");

while (a <= 10){//división 
    var opr2 = a2+a;
    a++;
    document.write (a2 + " + " + a + " = " + opr2 + "<br/>");
}

document.write ("--------------------------------<br/>");
document.write ("TABLA DIVISIÓN     " + c2 + "<br/>");
document.write ("--------------------------------<br/>");

do {//do-while
    var opr3 = c2/c;
    c++;
    document.write (c2 + " / " + c + " = " + opr3 + "<br/>");
} while (c <= 10);