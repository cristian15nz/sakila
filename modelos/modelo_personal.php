<?php

require_once "config/conexion.php";

function obtenerPersonal($conexion)
{
    $sql = "SELECT 
                   s.staff_id,
                   s.first_name,
                   s.last_name,
                   CONCAT(s.first_name, ' ', s.last_name) AS name,
                   s.address_id,
                   a.address,
                   s.picture,
                   LOWER(s.email) AS email,
                   s.store_id,
                   s.active,
                   IF (s.active = 1, 'Si', 'No') AS activo,
                   s.username,
                   s.password
            FROM staff AS s
            LEFT JOIN address a on s.address_id = a.address_id
            LEFT JOIN store sto on s.store_id = sto.store_id
            ;";

    return $conexion->query($sql)->fetchAll();
}

function insertarPersonales($conexion, $datos)
{
    $sql = "INSERT INTO staff (first_name, last_name, address_id, picture, email, store_id, active, username, password) 
            VALUES (:nombrePersonal, :apellidoPersonal, :idDireccion, :imagen, :email, :idTienda, :activo, :usuario, :contrasena);";

    return $conexion->prepare($sql)->execute($datos);
}