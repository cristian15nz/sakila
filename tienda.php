<?php

require_once "funciones/ayudante.php";

$nombrePagina = "Tienda";

// Declarar las variables


// Asegurarnos de que el usuario haya hecho click en el boton Guardar
if (isset($_GET['guardar_tienda'])) {
    // codigo para guardar en la base de datos
    echo "Se van a guardar los datos...";
}

// Incluir la vista
include_once "vistas/vista_tienda.php";