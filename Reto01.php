<?php
/*
Escribe un programa que muestre los números de 1 a 100 (ambos incluidos y con un salto de línea entre cada impresión), sustituyendo los siguientes:
  - Múltiplos de 3 por la palabra "fizz".
  - Múltiplos de 5 por la palabra "buzz".
  - Múltiplos de 3 y de 5 a la vez por la palabra "fizzbuzz".
*/

  for ($num = 0; $num <= 100; $num++) {
    if ($num % 3 === 0 && $num % 5 === 0) {
    echo "FizzBuzz<br>";
    }
    elseif ($num % 5 === 0) {
        echo "Buzz<br>";
    }
    elseif ($num % 3 === 0) {
        echo "Fizz<br>";
    }
    else {
        echo "$num<br>";
    }
}
?>
