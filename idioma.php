<?php

require_once "funciones/ayudante.php";
require_once "modelos/modelo_idioma.php";

$nombrePagina = "Idioma";

// Declarar las variables
$nombreIdioma = $_POST['nombreIdioma'] ?? "";

try {

    // Asegurarnos de que el usuario haya hecho click en el botón Guardar
    if ( isset($_POST['guardarIdioma']) ) {

        // Validar datos
        if ( empty($nombreIdioma) ) {
            throw new Exception("El nombre del idioma no puede estar vacío.");
        }

        // Preparar el array con los datos
        $datos = compact('nombreIdioma');

        // Insertar los datos
        $idiomaInsertado = insertarIdiomas($conexion, $datos);
        $mensaje = "Los datos del idioma se guardaron correctamente.";

        // Lanzar un error si no se insertó correctamente
        if ( ! $idiomaInsertado ) {
            throw new Exception("Ocurrió un error al insertar los datos del idioma.");
        }

        // Re-direccionar la página
        redireccionar("idioma.php");

    }
} catch ( Exception $e ) {
    $error = $e->getMessage();
}

$idiomas = obtenerIdiomas($conexion);

// Incluir la vista
include_once "vistas/vista_idioma.php";