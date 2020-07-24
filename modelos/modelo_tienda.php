<?php

require_once "config/conexion.php";

function obtenerTiendas($conexion)
{
    $sql = "SELECT sto.store_id, sto.manager_staff_id, sta.first_name, sta.last_name, a.address_id, a.address 
            FROM store sto 
            LEFT JOIN address a on sto.address_id = a.address_id
            LEFT JOIN staff sta on sto.manager_staff_id = sta.staff_id;";

    return $conexion->query($sql)->fetchAll();
}

function insertarTiendas($conexion, $datos)
{
    $sql = "INSERT INTO store (manager_staff_id, address_id) 
            VALUES (:idGerenteTienda, :idDireccionTienda)";

    return $conexion->prepare($sql)->execute($datos);
}