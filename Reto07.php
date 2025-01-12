<?php
// Función recursiva para encontrar el n-ésimo número de Fibonacci

function fibonacci($n) {
    if ($n < 2) {
        return $n;
    }
    return fibonacci($n - 1) + fibonacci($n - 2);
}

// Función para imprimir los primeros 50 números de la serie de Fibonacci
function printFibonacciSeries($count) {
    for ($i = 0; $i < $count; $i++) {
        echo fibonacci($i) . "\n";
    }
}

// Llamada a la función para imprimir los primeros 50 números de la serie de Fibonacci
printFibonacciSeries(50);


?>






















