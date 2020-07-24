<?php

require_once "config/conexion.php";

function obtenerCiudades($conexion)
{
    $sql = "SELECT city_id, city, country FROM city INNER JOIN country c on city.country_id = c.country_id";

    return $conexion->query($sql)->fetchAll();
}

function insertarCiudades($conexion, $datos)
{
    $sql = "INSERT INTO city (city, country_id) VALUES (:nombreCiudad, :idPais);";

    return $conexion->prepare($sql)->execute($datos);
}