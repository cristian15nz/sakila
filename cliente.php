<?php

require_once "funciones/ayudante.php";
require_once "modelos/modelo_cliente.php";
require_once "modelos/modelo_tienda.php";
require_once "modelos/modelo_direccion.php";

$nombrePagina = "Cliente";

$idTienda = $_POST['tienda'] ?? "";
$nombreCliente = $_POST['nombreCliente'] ?? "";
$apellidoCliente = $_POST['apellidoCliente'] ?? "";
$correoCliente = $_POST['correoCliente'] ?? "";
$idDireccion = $_POST['direccion'] ?? "";
$activoCliente = isset($_POST['activoCliente']) ? 1 : 0;

try {

    // Asegurarnos de que el usuario haya hecho click en el botón Guardar
    if ( isset($_POST['guardarCliente']) ) {

        // Validar datos
        if ( empty($idTienda) ) {
            throw new Exception("Debe seleccionar una tienda.");
        }

        if ( empty($nombreCliente) ) {
            throw new Exception("El nombre del cliente no puede estar vacío.");
        }

        if ( empty($apellidoCliente) ) {
            throw new Exception("El apellido del cliente no puede estar vacío.");
        }

        if ( empty($correoCliente) ) {
            throw new Exception("El correo del cliente no puede estar vacío.");
        }

        if ( empty($idDireccion) ) {
            throw new Exception("Debe seleccionar una dirección.");
        }

        // Preparar el array con los datos
        $datos = compact('idTienda', 'nombreCliente', 'apellidoCliente', 'correoCliente', 'idDireccion', 'activoCliente');

        imprimirArray($datos);

        // Insertar los datos
        $clienteInsertado = insertarClientes($conexion, $datos);
        $mensaje = "Los datos del clientes se guardaron correctamente.";

        // Lanzar un error si no se insertó correctamente
        if ( ! $clienteInsertado ) {
            throw new Exception("Ocurrió un error al insertar los datos del cliente");
        }

        // Re-direccionar la página
        redireccionar("cliente.php");

    }
} catch ( Exception $e ) {
    $error = $e->getMessage();
}

// Cargar los datos de los modelos
$clientes = obtenerClientes($conexion);
$tiendas = obtenerTiendas($conexion);
$direcciones = obtenerDirecciones($conexion);

// Incluir la vista
include_once "vistas/vista_cliente.php";