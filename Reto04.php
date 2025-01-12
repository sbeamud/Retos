<?php
/*
Escribe una función que reciba un texto y retorne verdadero o falso (Boolean) según sean o no palíndromos.
 Un Palíndromo es una palabra o expresión que es igual si se lee de izquierda a derecha que de derecha a izquierda.
 NO se tienen en cuenta los espacios, signos de puntuación y tildes.
 Ejemplo: Ana lleva al oso la avellana.
*/
function textoInverso ($cadena) {
    $cadena = strtolower($cadena); //<--combierte string a minus
    
    $vocalesConTilde = ['á', 'é', 'í', 'ó', 'ú'];
    $vocalesSinTilde = ['a', 'e', 'i', 'o', 'u'];
    $cadena = str_replace($vocalesConTilde, $vocalesSinTilde, $cadena); //<--reemplaza las vocales con tilde por vocales sin tilde
    
    $cadena = preg_replace('/[^a-z0-9]/', '', $cadena); //<--cambia signos de puntuacion por nada

    $longitud = strlen($cadena); //da un valor a la longitud de la cadena

    for ($i = 0; $i < $longitud / 2; $i++) {
        if ($cadena[$i] != $cadena[$longitud -1 - $i]) {
            return false;
        }
    }
    return true;
}

$cadena = "Ana llevá al oso la avellana!!";
if (textoInverso($cadena)) {
    echo $cadena . ": Es un palindromo"; 
    } else {
        echo $cadena . ": No es un palindromo"; 
    }

/*
function textoPali ($cadena) {
    $cadena strtolower($cadena);

    $cadena preg_replace('/[`^a-z0-9]/', '', $cadena);

    $vocalesConTilde = ['á', 'é', 'í', 'ó', 'ú'];
    $vocalesSinTilde = ['a', 'e', 'i', 'o', 'u'];
    $cadena str_replace ($vocalesConTilde, $vocalesSinTilde, $cadena);

    $longitud = strlen ($cadena);

    for ($i = 0; $i < $longitud / 2; $i++) {
        if ($cadena[$i] != $cadena[$longitud - 1 - $i]) {
            return false;
        }
    }
    return true;
}
*/
?>
