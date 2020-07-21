<?php

require_once "funciones/ayudante.php";
require_once "modelos/modelo_actor.php";

// Declarar las variables
$nombrePagina = "Actor";

$nombreActor = $_POST['nombreActor'] ?? "";
$apellidoActor = $_POST['apellidoActor'] ?? "";

//imprimirArray($_POST);

try {


    // Asegurarnos de que el usuario haya hecho click en el boton Guardar Actor
    if ( isset($_POST['guardar_actor']) ) {

        // Validar datos
        if ( empty($nombreActor) ) {
            throw new Exception("El nombre no puede estar vacío.");
        }

        if ( empty($apellidoActor) ) {
            throw new Exception("El apellido no puede estar vacío.");
        }

        // Preparar el array con los datos
        $datos = compact('nombreActor', 'apellidoActor');

        // Insertar los datos
        $actorInsertado = insertarActores($conexion, $datos);
        $mensaje = "Los datos del actor se guardaron correctamente.";

        // Lanzar un error si no se insertó correctamente
        if ( ! $actorInsertado ) {
            throw new Exception("Ocurrió un error al insertar los datos del actor");
        }

        // Redireccionar la pagina
        redireccionar("actor.php");

    }
} catch ( Exception $e ) {
    $error = $e->getMessage();
}

// Cargar los datos de los modelos
$actores = obtenerActores($conexion);

// Incluir la vista
include_once "vistas/vista_actor.php";