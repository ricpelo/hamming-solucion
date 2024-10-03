<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Distancia Hamming</title>
</head>
<body>
    <?php
    require 'auxiliar.php';

    $errores = [];
    $c1 = obtener_parametro('c1', 'Falta la primera cadena', $errores);
    $c2 = obtener_parametro('c2', 'Falta la segunda cadena', $errores);
    if (hay_errores($errores)) {
        mostrar_mensajes_error($errores);
    } else {
        $distancia = distancia_hamming($c1, $c2); ?>
        <h3>La distancia Hamming es <?= $distancia ?>.</h3><?php
    } ?>
</body>
</html>
