<?php

require_once "config/conexion.php";

function obtenerCiudades(PDO $conexion) {
    $sql = "SELECT city_id, city FROM city";

    return $conexion->query($sql)->fetchAll();
}