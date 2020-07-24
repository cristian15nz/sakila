<?php

require_once "config/conexion.php";

function obtenerDirecciones($conexion)
{
    $sql = "SELECT address_id, address, address2, district, city_id, postal_code, phone, location FROM address;";

    return $conexion->query($sql)->fetchAll();
}