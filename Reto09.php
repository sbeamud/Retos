<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Conversor a Morse</title>
</head>
<body>
   <h1>Texto a Morse</h1>
   <fieldset>
    <legend>Introduce un texto</legend>
    <form method="post" action="Reto09.php">
        <input type="text" id="texto" name="texto" placeholder="Hola mundo">
        <button type="submit">Convertir</button>
    </form>
   </fieldset>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $texto = $_POST['texto'];
    $textToMorse = array(
        "a" => ".-",
        "b" => "-...",
        "c" => "-.-.",
        "d" => "-..",
        "e" => ".",
        "f" => "..-.",
        "g" => "--.",
        "h" => "....",
        "i" => "..",
        "j" => ".---",
        "k" => "-.-",
        "l" => ".-..",
        "m" => "--",
        "n" => "-.",
        "o" => "---",
        "p" => ".--.",
        "q" => "--.-",
        "r" => ".-.",
        "s" => "...",
        "t" => "-",
        "u" => "..-",
        "v" => "...-",
        "w" => ".--",
        "x" => "-..-",
        "y" => "-.--",
        "z" => "--..",
        "1" => ".----",
        "2" => "..---",
        "3" => "...--",
        "4" => "....-",
        "5" => ".....",
        "6" => "-....",
        "7" => "--...",
        "8" => "---..",
        "9" => "----.",
        "0" => "-----",
        "." => ".-.-.-",
        "," => "--..--",
        "?" => "..--..",
        "!" => "-.-.--",
        "(" => "-.--.-",
        ")" => "-.--.-",
        "/" => "-..-.",
        "=" => "-...-",
        "+" => ".-.-.",
        "-" => "-....-",
        "'" => ".----.",
        ":" => "---...",
        ";" => "-.-.-.",
        " " => "  ",
    );


    $textMinus = strtolower($texto);
    $textPuro = preg_replace('/[^a-zA-Z0-9.,?!()\s\/=+\-:;]+/', "", $textMinus);
    $textArray = str_split($textPuro);


    $original = "";
        foreach ($textArray as $te) {
            $original .= $te;
        }
        echo "<p>Texto original: " . $original . "</p>";



    function textToMorse($textArray, $textToMorse) {
        $textConverted = "";
        foreach ($textArray as $char) {
            if (isset($textToMorse[$char])) {
                $textConverted .= $textToMorse[$char] . " ";
            }
        }
        return "<p>Texto a Morse: " . $textConverted . "</p>";
    }
/*
    function morseToText($textArray, $textToMorse) {
        $morseText = array_flip($textToMorse);
        $textConverted = "";
        foreach ($textArray as $char) {
            if (isset($morseText[$char])) {
                $textConverted .= $morseText[$char] . " "; 
            } elseif ($char === " ") {
                $textConverted .= "   "; 
            }
        }
        return "<p>Morse a texto: " . trim($textConverted) . "</p>";
    }



    // De morse a texto
    function morseATexto($textToMorse, $textPuro) {
        $morseText = array_flip($textToMorse);
        $morse = "";
        $textConverted = "";

        for ($i = 0; $i < strlen($textPuro); $i++) {
            $morse .= $i;
            if ($i === " ") {
                foreach ($morseText as $mor) {
                    $textConverted .= $morseText[$morse] . " ";
                }
                break;
            }
        }
        return "<p>Morse a texto: " . $textConverted . "</p>";

    }
*/
    function morseToText($textToMorse, $textPuro) {
        // Invertir el diccionario de traducción para buscar por Morse
        $morseText = array_flip($textToMorse);
    
        // Dividir el texto Morse por espacios dobles para obtener palabras
        $words = explode("  ", $textPuro);
        $textConverted = "";
    
        foreach ($words as $word) {
            // Dividir las palabras en caracteres Morse (separados por un solo espacio)
            $chars = explode(" ", $word);
            foreach ($chars as $char) {
                // Buscar cada carácter Morse en el diccionario y añadirlo al texto convertido
                if (isset($morseText[$char])) {
                    $textConverted .= $morseText[$char];
                }
            }
            $textConverted .= " ";
        }
        return "<p>Morse a texto: " . trim($textConverted) . "</p>";
    }
    



    if (preg_match('/^[.\- ]+$/', $textPuro)) {
        echo morseToText($textArray, $textToMorse);
    } else {
        echo textToMorse($textArray, $textToMorse);
    }

  
}

?>
