<?php include_once "partes/parte_head.php"; ?>

    <body>

<?php include_once "partes/parte_navbar.php"; ?>

    <!-- contenido -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                <?php include_once "partes/parte_menu.php"; ?>
            </div>

            <div class="col-md-10">
                <h3><?= $nombrePagina; ?></h3>

                <hr>

                <div class="row">
                    <div class="col-md-5">

                        <form action="" method="post">
                            <div class="mb-3">
                                <label for="tienda" class="form-label">Tienda</label>
                                <select name="tienda" id="tienda" class="form-select">
                                    <option value="">Elige una tienda</option>
                                    <?php

                                    foreach ( $tiendas as $tienda ) {
                                        echo "<option value='{$tienda['store_id']}'>{$tienda['store_id']}</option>";
                                    }

                                    ?>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="nombreCliente" class="form-label">Nombre</label>
                                <input type="text" name="nombreCliente" id="nombreCliente" class="form-control"
                                       value="<?= $nombreCliente ?>" placeholder="Escribe el nombre del cliente">
                            </div>

                            <div class="mb-3">
                                <label for="apellidoCliente" class="form-label">Apellido</label>
                                <input type="text" name="apellidoCliente" id="apellidoCliente" class="form-control"
                                       value="<?= $apellidoCliente ?>" placeholder="Escribe el apellido del cliente">
                            </div>

                            <div class="mb-3">
                                <label for="correoCliente" class="form-label">Correo</label>
                                <input type="email" name="correoCliente" id="correoCliente" class="form-control"
                                       value="<?= $correoCliente ?>" placeholder="Escribe el correo del cliente">
                            </div>

                            <div class="mb-3">
                                <label for="direccion" class="form-label">Dirección</label>
                                <select name="direccion" id="direccion" class="form-select">
                                    <option value="">Elige una dirección</option>
                                    <?php

                                    foreach ( $direcciones as $direccion ) {
                                        echo "<option value='{$direccion['address_id']}'>{$direccion['address']}</option>";
                                    }

                                    ?>
                                </select>
                            </div>

                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" value="<?= $activoCliente ?>"
                                       name="activoCliente" id="activoCliente" checked>
                                <label class="form-check-label" for="activoCliente">
                                    Activo
                                </label>
                            </div>

                            <div class="mb-3">
                                <button type="submit" name="guardarCliente" class="btn btn-primary">
                                    <i class="fas fa-save"></i> Guardar
                                </button>
                            </div>

                        </form>

                        <?php include_once "partes/parte_mensajes.php"; ?>

                    </div>
                </div>

                <hr>

                <div class="row">
                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Tienda</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Correo</th>
                                <th scope="col">Dirección</th>
                                <th scope="col">Activo</th>
                                <th scope="col">Fecha de Creación</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php

                            foreach ( $clientes as $cliente ) {

                                if ( $cliente['active'] == 1 ) {
                                    $icono = '<i class=\'fas fa-check text-success\'></i>';
                                    // $icono = '<span class="badge bg-success">Activado</span>';
                                } else {
                                    $icono = '<i class=\'fas fa-times text-danger\'></i>';
                                    // $icono = '<span class="badge bg-danger">Desactivado</span>';
                                }

                                echo "<tr>
                                            <th scope=\"row\">{$cliente['customer_id']}</th>
                                            <td>{$cliente['store_id']}</td>
                                            <td>" . ucwords(strtolower($cliente['name'])) . "</td>
                                            <td>{$cliente['email']}</td>
                                            <td>{$cliente['address']}</td>
                                            <td>
                                            {$cliente['activo']}
                                            
                                            {$icono}
                                            
                                            </td>
                                            <td>{$cliente['fecha']}</td>
                                        </tr>";
                            }

                            ?>
                            </tbody>
                        </table>
                    </div>

                </div>

            </div>

        </div>
    </div>


<?php include_once "partes/parte_foot.php"; ?>