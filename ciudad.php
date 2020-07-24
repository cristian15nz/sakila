<?php

require_once "funciones/ayudante.php";
require_once "modelos/modelo_pais.php";
require_once "modelos/modelo_ciudad.php";

$nombrePagina = "Ciudad";

$nombreCiudad = $_POST['nombreCiudad'] ?? "";
$idPais = $_POST['pais'] ?? "";

// Asegurarnos de que el usuario haya hecho click en el botón guardar
try {
    if ( isset($_POST['guardarCiudad']) ) {

        // Validar datos
        if ( empty($nombreCiudad) ) {
            throw new Exception("El nombre de la ciudad no puede estar vacío.");
        }

        if ( empty($idPais) ) {
            throw new Exception("Debe seleccionar un país.");
        }

        // Preparar el array con los datos
        $datos = compact('nombreCiudad', 'idPais');

        // Insertar los datos
        $ciudadInsertada = insertarCiudades($conexion, $datos);
        $mensaje = "Los datos de la ciudad fueron guardados correctamente.";

        // Lanzar error si no se han insertado los datos
        if ( ! $ciudadInsertada ) {
            throw new Exception("Ha ocurrido un error al insertar los datos de la ciudad");
        }

        // Re-direccionar la pagina
        redireccionar("ciudad.php");
    }
} catch ( Exception $e ) {
    $error = $e->getMessage();
}


// Traer los datos de los modelos
$paises = obtenerPaises($conexion);
$ciudades = obtenerCiudades($conexion);

// Incluir la vista
include_once "vistas/vista_ciudad.php";