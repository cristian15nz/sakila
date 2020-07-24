<?php

require_once "funciones/ayudante.php";
require_once "modelos/modelo_idioma.php";
require_once "modelos/modelo_pelicula.php";

$nombrePagina = "Película";

// Declarar las variables

$titulo = $_POST['titulo'] ?? "";
$descripcion = $_POST['descripcion'] ?? "";
$anoLanzamiento = $_POST['anoLanzamiento'] ?? "";
$idIdioma = $_POST['idIdioma'] ?? "";
$idIdiomaOriginal = $_POST['idIdiomaOriginal'] ?? "";
$duracionRenta = $_POST['duracionRenta'] ?? "";
$tasaRenta = $_POST['tasaRenta'] ?? "";
$duracion = $_POST['duracion'] ?? "";
$costoReemplazo = $_POST['costoReemplazo'] ?? "";
$rating = $_POST['rating'] ?? "";
$caracteristicasEspeciales = $_POST['caracteristicasEspeciales'] ?? "";


try {

    // Asegurarnos de que el usuario haya hecho click en el botón Guardar
    if ( isset($_POST['guardarPelicula']) ) {

        // Validar datos
        if ( empty($titulo) ) {
            throw new Exception("El título no puede estar vacío.");
        }

        // Preparar el array con los datos
        $datos = compact('titulo');

        // Insertar los datos
        $peliculaInsertada = insertarPeliculas($conexion, $datos);
        $mensaje = "Los datos de la película se guardaron correctamente.";

        // Lanzar un error si no se insertó correctamente
        if ( ! $peliculaInsertada ) {
            throw new Exception("Ocurrió un error al insertar los datos de la película");
        }

        // Re-direccionar la página
        redireccionar("pelicula.php");

    }
} catch ( Exception $e ) {
    $error = $e->getMessage();
}

$idiomas = obtenerIdiomas($conexion);
$peliculas = obtenerPeliculas($conexion);

imprimirArray($_POST);

// Incluir la vista
include_once "vistas/vista_pelicula.php";