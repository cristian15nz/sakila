<?php

require_once "funciones/ayudante.php";
require_once "modelos/modelo_personal.php";
require_once "modelos/modelo_direccion.php";
require_once "modelos/modelo_tienda.php";

$nombrePagina = "Personal";

// Declarar las variables
$staff_id = $_POST['staff_id'] ?? "";
$nombrePersonal = $_POST['nombrePersonal'] ?? "";
$apellidoPersonal = $_POST['apellidoPersonal'] ?? "";
$idDireccion = $_POST['idDireccion'] ?? "";
$imagen = $_POST['imagen'] ?? "";
$email = $_POST['email'] ?? "";
$idTienda = $_POST['idTienda'] ?? "";
$activo = isset($_POST['activo']) ? 1 : 0;
$usuario = $_POST['usuario'] ?? "";
$contrasena = $_POST['contrasena'] ?? "";


try {

    // Asegurarnos de que el usuario haya hecho click en el botón Guardar
    if ( isset($_POST['guardarPersonal']) ) {

        // Validar datos
        if ( empty($nombrePersonal) ) {
            throw new Exception("El nombre no puede estar vacío.");
        }

        if ( empty($apellidoPersonal) ) {
            throw new Exception("El apellido no puede estar vacío.");
        }

        if ( empty($idDireccion) ) {
            throw new Exception("Debe seleccionar una dirección.");
        }

        if ( empty($imagen) ) {
            // throw new Exception("La imagen no puede estar vacía.");
        }

        if ( empty($email) ) {
            throw new Exception("El email no puede estar vacío.");
        }

        if ( empty($idTienda) ) {
            throw new Exception("Debe seleccionar una tienda.");
        }

        if ( empty($activo) ) {
            // throw new Exception("El activo no puede estar vacío.");
        }

        if ( empty($usuario) ) {
            throw new Exception("El usuario no puede estar vacío.");
        }

        if ( empty($contrasena) ) {
            throw new Exception("La contraseña no puede estar vacía.");
        }

        // Preparar el array con los datos
        $datos = compact('nombrePersonal', 'apellidoPersonal', 'idDireccion', 'imagen', 'email', 'idTienda', 'activo', 'usuario', 'contrasena');

        // Insertar los datos
        $personalInsertado = insertarPersonales($conexion, $datos);
        $mensaje = "Los datos del personal se guardaron correctamente.";

        // Lanzar un error si no se insertó correctamente
        if ( ! $personalInsertado ) {
            throw new Exception("Ocurrió un error al insertar los datos del personal");
        }

        // Re-direccionar la página
        redireccionar("personal.php");

    }
} catch ( Exception $e ) {
    $error = $e->getMessage();
}

$personales = obtenerPersonal($conexion);
$direcciones = obtenerDirecciones($conexion);
$tiendas = obtenerTiendas($conexion);

// Incluir la vista
include_once "vistas/vista_personal.php";