<?php

require_once "funciones/ayudante.php";
require_once "modelos/modelo_personal.php";
require_once "modelos/modelo_tienda.php";
require_once "modelos/modelo_direccion.php";

$nombrePagina = "Tienda";

// Declarar las variables
$idGerenteTienda = $_POST['gerenteTienda'] ?? "";
$idDireccionTienda = $_POST['direccionTienda'] ?? "";

try {

    // Asegurarnos de que el usuario haya hecho click en el botón Guardar
    if ( isset($_POST['guardarTienda']) ) {

        // Validar datos
        if ( empty($idGerenteTienda) ) {
            throw new Exception("Debe seleccionar un gerente.");
        }

        if ( empty($idDireccionTienda) ) {
            throw new Exception("Debe seleccionar una dirección.");
        }

        // Preparar el array con los datos
        $datos = compact('idGerenteTienda', 'idDireccionTienda');

        // Insertar los datos
        $tiendaInsertada = insertarTiendas($conexion, $datos);
        $mensaje = "Los datos de la tienda se guardaron correctamente.";

        // Lanzar un error si no se insertó correctamente
        if ( ! $tiendaInsertada ) {
            throw new Exception("Ocurrió un error al insertar los datos de la tienda");
        }

        // Re-direccionar la página
        redireccionar("tienda.php");

    }
} catch ( Exception $e ) {
    $error = $e->getMessage();
}


$personales = obtenerPersonal($conexion);
$direcciones = obtenerDirecciones($conexion);
$tiendas = obtenerTiendas($conexion);

// Incluir la vista
include_once "vistas/vista_tienda.php";