<?php

// Valores de mi base de datos local (mi pc)
$host = "localhost";
$dbname = "sakila";
$usuario = "root";
$contrasena = "cristian2020";

// Valores de la base de datos 000webhost
if ( $_SERVER['SERVER_NAME'] == 'xtudioplay.000webhostapp.com' ) {
    $host = "localhost";
    $dbname = "id8904345_sakila";
    $usuario = "id8904345_cristian_000webhost";
    $contrasena = "e=a/!p8T-9KXjl=W";
}

$ajustes = [
    19 => 2, // devuelve un array con los nombres de las columnas de los resultados de la BD.
    3  => 2, // Nos genera excepciones cuando hay errores en los queries
];

try {
    $conexion = new PDO("mysql:host={$host};dbname={$dbname}", $usuario, $contrasena, $ajustes);
} catch ( PDOException $exception ) {
    throw new Exception("Hubo un error al conectarnos a la base de datos: {$exception->getMessage()}");
}

