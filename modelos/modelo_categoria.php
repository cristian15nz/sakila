<?php

require_once "config/conexion.php";

function obtenerCategorias($conexion) {
    $sql = "SELECT * FROM category;";

    return $conexion->query($sql)->fetchAll();
}