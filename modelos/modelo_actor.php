<?php

require_once "config/conexion.php";

function obtenerActores($conexion) {
    $sql = "SELECT * FROM actor;";

    return $conexion->query($sql)->fetchAll();
}