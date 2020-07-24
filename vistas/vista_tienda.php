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
                                <label for="gerenteTienda" class="form-label">Gerente de la tienda</label>
                                <select name="gerenteTienda" id="gerenteTienda" class="form-select">
                                    <option value="">Elige una gerente</option>
                                    <?php

                                    foreach ( $personales as $personal ) {
                                        echo "<option value='{$personal['staff_id']}'>{$personal['first_name']} {$personal['last_name']}</option>";
                                    }

                                    ?>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="direccionTienda" class="form-label">Dirección de la tienda</label>
                                <select name="direccionTienda" id="direccionTienda" class="form-select">
                                    <option value="">Elige una dirección</option>
                                    <?php

                                    foreach ( $direcciones as $direccion ) {
                                        echo "<option value='{$direccion['address_id']}'>{$direccion['address']}</option>";
                                    }

                                    ?>
                                </select>
                            </div>

                            <div class="mb-3">
                                <button type="submit" name="guardarTienda" class="btn btn-primary">
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
                                <th scope="col">Gerente</th>
                                <th scope="col">Dirección</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php

                            foreach ( $tiendas as $tienda ) {
                                echo "<tr>
                                            <th scope=\"row\">{$tienda['store_id']}</th>
                                            <td>{$tienda['first_name']} {$tienda['last_name']}</td>
                                            <td>{$tienda['address']}</td>
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