<?php

require_once "funciones/ayudante.php";
require_once "modelos/modelo_categoria.php";

$nombrePagina = "Categoría";

$categorias = obtenerCategorias($conexion);

// Inlcuir la vista
include_once "vistas/vista_categoria.php";