<?php

require_once "funciones/ayudante.php";
require_once "modelos/modelo_categoria.php";

$nombrePagina = "Categoría";

$nombreCategoria = $_POST['nombreCategoria'] ?? "";

try {

    // Asegurarnos de que el usuario haya hecho click en el botón Guardar
    if ( isset($_POST['guardarCategoria']) ) {

        // Validar datos
        if ( empty($nombreCategoria) ) {
            throw new Exception("El nombre de la categoría no puede estar vacío.");
        }

        // Preparar el array con los datos
        $datos = compact('nombreCategoria');

        // Insertar los datos
        $categoriaInsertada = insertarCategorias($conexion, $datos);
        $mensaje = "Los datos de la categoría se guardaron correctamente.";

        // Lanzar un error si no se insertó correctamente
        if ( ! $categoriaInsertada ) {
            throw new Exception("Ocurrió un error al insertar los datos de la categoría");
        }

        // Re-direccionar la página
        redireccionar("categoria.php");

    }
} catch ( Exception $e ) {
    $error = $e->getMessage();
}


$categorias = obtenerCategorias($conexion);

// Inlcuir la vista
include_once "vistas/vista_categoria.php";