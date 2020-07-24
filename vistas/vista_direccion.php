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
                                <label for="direccion" class="form-label">Dirección</label>
                                <input type="text" name="direccion" id="direccion" class="form-control"
                                       value="<?= $direccion ?>" placeholder="Escribe la dirección">
                            </div>

                            <div class="mb-3">
                                <label for="direccion2" class="form-label">Dirección 2</label>
                                <input type="text" name="direccion2" id="direccion2" class="form-control"
                                       value="<?= $direccion2 ?>" placeholder="Escribe la dirección 2">
                            </div>

                            <div class="mb-3">
                                <label for="distrito" class="form-label">Distrito</label>
                                <input type="text" name="distrito" id="distrito" class="form-control"
                                       value="<?= $distrito ?>" placeholder="Escribe el distrito">
                            </div>

                            <div class="mb-3">
                                <label for="ciudad" class="form-label">Ciudad</label>
                                <select name="ciudad" id="ciudad" class="form-select">
                                    <option value="">Elige una ciudad</option>
                                    <?php

                                    foreach ( $ciudades as $ciudad ) {
                                        echo "<option value=\"{$ciudad["city_id"]}\">{$ciudad["city"]}</option>";
                                    }

                                    ?>

                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="codigoPostal" class="form-label">Código Postal</label>
                                <input type="text" name="codigoPostal" id="codigoPostal" class="form-control"
                                       value="<?= $codigoPostal ?>" placeholder="Escribe el código postal">
                            </div>

                            <div class="mb-3">
                                <label for="telefono" class="form-label">Teléfono</label>
                                <input type="tel" name="telefono" id="telefono" class="form-control"
                                       value="<?= $telefono ?>" placeholder="Escribe el teléfono">
                            </div>

                            <div class="mb-3">
                                <label for="ubicacion" class="form-label">Ubicación</label>
                                <input type="text" name="ubicacion" id="ubicacion" class="form-control"
                                       value="<?= $ubicacion ?>" placeholder="Escribe la ubicación">
                            </div>

                            <div class="mb-3">
                                <button type="submit" name="guardarDireccion" class="btn btn-primary">
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
                                <th scope="col">Dirección</th>
                                <th scope="col">Dirección2</th>
                                <th scope="col">Distrito</th>
                                <th scope="col">Ciudad</th>
                                <th scope="col">Código Postal</th>
                                <th scope="col">Teléfono</th>
                                <th scope="col">Ubicación</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php

                            foreach ( $direcciones as $direcc ) {
                                echo "<tr>
                                            <th scope='row'>{$direcc['address_id']}</th>
                                            <td>{$direcc['address']}</td>
                                            <td>{$direcc['address2']}</td>
                                            <td>{$direcc['district']}</td>
                                            <td>{$direcc['city_id']} Postal</td>
                                            <td>{$direcc['postal_code']}</td>
                                            <td>{$direcc['phone']}</td>
                                            <td>{$direcc['location']}</td>
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