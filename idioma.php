<?php

require_once "funciones/ayudante.php";
require_once "modelos/modelo_idioma.php";

$nombrePagina = "Idioma";

// Declarar las variables


// Asegurarnos de que el usuario haya hecho click en el boton Guardar
if (isset($_GET['guardar_idioma'])) {
    // codigo para guardar en la base de datos
    echo "Se van a guardar los datos...";
}

$idiomas = obtenerIdiomas($conexion);

// Incluir la vista
include_once "vistas/vista_idioma.php";