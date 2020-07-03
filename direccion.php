<?php

require_once "funciones/ayudante.php";

$nombrePagina = "Dirección";

// Incluir los modelos
require_once "modelos/modelo_ciudad.php";

$ciudades = obtenerCiudades($conexion);

$direccion = $_GET['direccion'] ?? "";
$direccion2 = $_GET['direccion2'] ?? "";
$distrito = $_GET['distrito'] ?? "";
$ciudad = $_GET['ciudad'] ?? "";
$codigoPostal = $_GET['codigoPostal'] ?? "";
$telefono = $_GET['telefono'] ?? "";
$ubicacion = $_GET['ubicacion'] ?? "";

// Cuando el usuario haga click en el boton guardarDireccion
if (isset($_GET['guardarDireccion'])) {
    // codigo para la base de datos
    echo "guardando datos...";
}

// Incluir la vista
include_once "vistas/vista_direccion.php";