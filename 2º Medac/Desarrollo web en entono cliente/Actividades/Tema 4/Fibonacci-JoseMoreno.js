function calcularFibonacci() {
    var n = parseInt(prompt("Introduzca un numero del 1 al 100: "));
    var a = 0, b = 1;
    var fibonacci = [a, b];

    for (var i = 2; i < n; i++) {
        var next = a + b;
        fibonacci.push(next);
        a = b;
        b = next;
    }

    var resultado = "La sucesion de Fibonacci es: " + fibonacci.join(", ");
    document.getElementById("resultado").textContent = resultado;
}

calcularFibonacci(); // Llama a la funcion directamente al cargar la pagina


