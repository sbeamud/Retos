<?php
/*
Escribe una función que reciba dos palabras (String) y retorne verdadero o falso (Boolean) según sean o no anagramas.
 Un Anagrama consiste en formar una palabra reordenando TODAS las letras de otra palabra inicial.
 NO hace falta comprobar que ambas palabras existan.
 Dos palabras exactamente iguales no son anagrama.

Casos de prueba:
  Roma - Amor -> true
  Amor - Amor -> false
  Amor - Amol -> false
*/

function tester_words ($word1, $word2) {
       if ($word1  === $word2) {
        return false;

       }
// Convertimos las cadenas a arrays de caracteres
$arr1 = str_split($word1);
$arr2 = str_split($word2);
// Ordenamos ambos arrays
sort($arr1);
sort($arr2);
// Si los arrays ordenados son iguales, las cadenas tienen los mismos caracteres
return $arr1 === $arr2;
}
var_dump(tester_words("camaleon", "caleonma")); //true
var_dump(tester_words("lion", "leon")); //false
var_dump(tester_words("morado", "amor")); //false
var_dump(tester_words("camaleon", "casa")); //false
var_dump(tester_words("palabra", "palabra")); //true
?>

