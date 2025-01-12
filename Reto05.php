<?php
/*
Escribe un programa que le pida al usuario un entero N y
 dibuje un árbol de navidad de esa altura.

Por ejemplo, si N es 4, deberá dibujar esto:

                           *
                          ***
                         *****
                        *******
*/

$altura = 5;

for ($i = 0; $i <= $altura; $i ++) {
    for ($k = $altura; $k > 0; $k --) {
        echo "&nbsp;";
    }
    for ($j = 0; $j < $i; $j++) {
        echo "*";
    }
    echo "<br>";
    }
?>