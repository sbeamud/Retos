<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reto 10</title>
</head>
<body>
    <h1>Buscador de caracteres</h1>
    <form action="Reto10.php" method="post">
        <input type="text" id="cadena" name="cadena" placeholder="Escribe aquí">
        <button type="submit" id="boton">Comprobar</button>
    </form>

    <h3>Version 1</h3>
    <?php
    /*
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $cadena = $_POST['cadena'];

        function reemplazarRepetidos($cadena) {
            $caracteresVistos = [];
            $resultado = '';

            foreach (str_split($cadena) as $caracter) {
                if (isset($caracteresVistos[$caracter])) {
                    $resultado .= '*';
                } else {
                    $resultado .= $caracter;
                    $caracteresVistos[$caracter] = true;
                }
            }
            return $resultado;
        }

        echo reemplazarRepetidos($cadena); 
    }*/
    ?>

    <h3>Version 2</h3>
    <?php
    $cadena = "Holaaaa";
    for ($i = 0; $i < strlen($cadena); $i++) {
        for ($o = 1; $o <strlen($cadena); $o++) {
            if ($i === $o) {
                echo $i;
            } else {
                echo "*";
                die;
            }
        }
    }
    ?>

    <h3>Version 3</h3>
    <?php
    
    ?>
</body>
</html>

