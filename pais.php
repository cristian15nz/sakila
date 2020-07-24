<?php

require_once "funciones/ayudante.php";
require_once "modelos/modelo_pais.php";

$nombrePagina = "País";

$nombrePais = $_POST['nombrePais'] ?? "";

try {

    // Asegurarnos de que el usuario haya hecho click en el botón Guardar
    if ( isset($_POST['guardarPais']) ) {

        // Validar datos
        if ( empty($nombrePais) ) {
            throw new Exception("El nombre del país no puede estar vacío.");
        }

        // Preparar el array con los datos
        $datos = compact('nombrePais');

        // Insertar los datos
        $paisInsertado = insertarPaises($conexion, $datos);
        $mensaje = "Los datos del país se guardaron correctamente.";

        // Lanzar un error si no se insertó correctamente
        if ( ! $paisInsertado ) {
            throw new Exception("Ocurrió un error al insertar los datos del país");
        }

        // Re-direccionar la página
        redireccionar("pais.php");

    }
} catch ( Exception $e ) {
    $error = $e->getMessage();
}

// Cargar los datos de los modelos
$paises = obtenerPaises($conexion);

// Incluir la vista
include_once "vistas/vista_pais.php";