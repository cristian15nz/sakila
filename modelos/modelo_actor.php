<?php

require_once "config/conexion.php";

/**
 * Obtener los actores registrados en la tabla actor
 *
 * @param PDO $conexion
 *
 * @return mixed
 */
function obtenerActores($conexion)
{
    $sql = "SELECT actor_id, first_name, last_name, last_update FROM actor;";

    return $conexion->query($sql)->fetchAll();
}

/**
 * Insertar los actores en la tabla actor
 *
 * @param PDO   $conexion
 * @param array $datos
 *
 * @return mixed
 */
function insertarActores($conexion, $datos)
{
    $sql = "INSERT INTO actor (first_name, last_name) VALUES (:nombreActor, :apellidoActor);";

    return $conexion->prepare($sql)->execute($datos);
}