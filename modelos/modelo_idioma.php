<?php

require_once "config/conexion.php";

function obtenerIdiomas($conexion)
{
    $sql = "SELECT * FROM language;";

    return $conexion->query($sql)->fetchAll();
}