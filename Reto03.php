<?php
/*
Escribe una función que reciba un numero (int) y retorne el factorial de ese número.

El factorial de n  se define en principio como el producto de todos los números enteros positivos hasta 1.
Tener en cuenta que el factorial de 0 es 1.

Resolved el problema de forma iterativa y de forma recursiva.

Casos de prueba:
5!=5x4x3x2x1=120
*/

//FACTORIAL DE MANERA RECURSIVA
echo "MANERA RECUSIVA: <br>";
function factorial($n) {
    if ($n == 0) {
        return 1;
    }
    echo "Cuenta: $n x " . ($n - 1) . " = factorial ($n - 1).<br>";
    return $n * factorial($n - 1);
}

echo "El resultado del factorial es: " . factorial(5);
echo "<br><br>";

//FACTORIAL DE MANERA ITERATIVA
echo "MANERA ITERATIVA:<br>";

function factorial_iterativo($num) {
    $factorial = 1;
    echo "Calculos realizados:<br>";
    for ($i = $num; $i > 1; $i--) {
        echo "$i x ";
        $factorial *= $i;
    }
    echo "1<br>";
    return $factorial;
}

echo "El factorial de 5 es: " . factorial_iterativo(5) . "<br>";
?>