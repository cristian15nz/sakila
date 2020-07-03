<?php

require_once "config/conexion.php";

function obtenerPersonal($conexion) {
    $sql = "SELECT * FROM staff;";

    return $conexion->query($sql)->fetchAll();
}