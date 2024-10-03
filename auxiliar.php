<?php

function distancia_hamming(string $c1, string $c2): int
{
    $longitud = mb_strlen($c1);
    $distancia = 0;

    for ($i = 0; $i < $longitud; $i++) {
        if (mb_substr($c1, $i, 1) != mb_substr($c2, $i, 1)) {
            $distancia++;
        }
    }

    return $distancia;
}

function agregar_error(string $par, string $mensaje, array &$errores): void {
    if (!isset($errores[$par])) {
        $errores[$par] = [];
    }
    $errores[$par][] = $mensaje;
}

function obtener_parametro($par, $mensaje ,&$errores)
{
    if (!isset($_GET[$par])) {
        agregar_error($par, $mensaje, $errores);
        return null;
    }

    return trim($_GET[$par]);
}

function hay_errores($errores)
{
    return !empty($errores);
}

function mostrar_mensajes_error($errores)
{
    foreach ($errores as $mensajes) {
        foreach ($mensajes as $mensaje) { ?>
            <h3><?= $mensaje ?></h3><?php
        }
    }
}
