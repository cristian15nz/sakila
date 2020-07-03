<?php

$usuario = "root";
$contrasena = "cristian2020";
$ajustes = [
    19 => 2 // devuelve un array con los nombres de las columnas de los resultados de la BD.
];

try {
    $conexion = new PDO('mysql:host=localhost;dbname=sakila', $usuario, $contrasena, $ajustes);
} catch (PDOException $exception) {
    throw new Exception("Hubo un error al conectarnos a la base de datos: {$exception->getMessage()}");
}

