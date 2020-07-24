<?php

require_once "funciones/ayudante.php";
require_once "modelos/modelo_ciudad.php";
require_once "modelos/modelo_direccion.php";

$nombrePagina = "Dirección";

$direccion = $_POST['direccion'] ?? "";
$direccion2 = $_POST['direccion2'] ?? "";
$distrito = $_POST['distrito'] ?? "";
$ciudad = $_POST['ciudad'] ?? "";
$codigoPostal = $_POST['codigoPostal'] ?? "";
$telefono = $_POST['telefono'] ?? "";
$ubicacion = $_POST['ubicacion'] ?? "";

try {
    // Cuando el usuario haga click en el botón guardarDireccion
    if ( isset($_POST['guardarDireccion']) ) {
        // Validar datos
        if ( empty($direccion) ) {
            throw new Exception("La dirección no puede estar vacía.");
        }
        if ( empty($direccion2) ) {
            throw new Exception("La dirección 2 no puede estar vacía.");
        }
        if ( empty($distrito) ) {
            throw new Exception("El distrito no puede estar vacío.");
        }
        if ( empty($ciudad) ) {
            throw new Exception("La ciudad no puede estar vacía.");
        }
        if ( empty($codigoPostal) ) {
            throw new Exception("El código postal no puede estar vacío.");
        }
        if ( empty($telefono) ) {
            throw new Exception("El teléfono no puede estar vacío.");
        }
        if ( empty($ubicacion) ) {
            throw new Exception("La ubicación no puede estar vacía.");
        }

        // Preparar el array con los datos
        $datos = compact('direccion', 'direccion2', 'distrito', 'ciudad', 'codigoPostal', 'telefono', 'ubicacion');

        // Insertar los datos
        $direccionInsertada = insertarDirecciones($conexion, $datos);
        $mensaje = "Los datos de la dirección se guardaron correctamente.";

        // Lanzar un error si no se insertó correctamente
        if ( ! $direccionInsertada ) {
            throw new Exception("Ocurrió un error al insertar los datos de la dirección");
        }

        // Re-direccionar la página
        redireccionar("direccion.php");


    }
} catch ( Exception $e ) {
    $error = $e->getMessage();
}

// Cargar los datos de los modelos
$ciudades = obtenerCiudades($conexion);
$direcciones = obtenerDirecciones($conexion);

// Incluir la vista
include_once "vistas/vista_direccion.php";