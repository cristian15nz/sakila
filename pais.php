<?php

require_once "funciones/ayudante.php";
require_once "modelos/modelo_pais.php";

$nombrePagina = "País";

$paises = obtenerPaises($conexion);

// Incluir la vista
include_once "vistas/vista_pais.php";