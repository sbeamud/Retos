<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Números narcisistas</title>
</head>
<body>
    <h1>Comprobación de número Amstrong</h1>
    <form method="post" action="Reto08.php">
        <label for="numero">Número</label>
        <input type="text" id="numero" name="numero">
        <button type="submit">Comprobar</button>
    </form>
</body>
</html>

<?php
/*
    Escribir una funcion que calcule si un número dado es un número de Amstrong (o también llamado narcisista).
    371 = 3^3 + 7^3 + 1^3   <-Es un número Amstrong
*/

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $number = $_POST['numero'];

    // Contar cuantos digitos tiene el número.
    $count = strlen($number);

    // Convertir el número en un array llamado digits
    $digits = str_split((string)$number);

    $total = 0;
    echo "<h2>Para comporbar si un número es Amstrong, hay que sumar el total de sus potencias.</h2>";
    echo "<p>El número en cuestión es el: " . $number . "</p>";

    // Recorrer el array mostrando cada calculo
    foreach ($digits as $n) {
        echo "- Cuenta: " . $n . "^" . $count . " = " . $n**$count . "<br>";
        $total += $n ** $count;
    }
    echo "<p>La suma del calculo de las potencias es: $total</p>";

    // Pintar si es o no un número Amstrong
    if ($total == $number) { 
        echo "<h3 style='color: green'>El número dado es un número Armstrong.</h3>";
    } else {
        echo "<h3 style='color: red'>El número dado NO es un número Amstrong.</h3>";
    }
}
?>
