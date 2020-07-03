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
                <h3><?php echo $nombrePagina; ?></h3>

                <hr>

                <div class="row">
                    <div class="col-md-5">
                        <form action="" method="get">
                            <div class="mb-3">
                                <label for="direccion" class="form-label">Dirección</label>
                                <input type="text" name="direccion" id="direccion" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="direccion2" class="form-label">Dirección 2</label>
                                <input type="text" name="direccion2" id="direccion2" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="distrito" class="form-label">Distrito</label>
                                <input type="text" name="distrito" id="distrito" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="ciudad" class="form-label">Ciudad</label>
                                <select name="ciudad" id="ciudad" class="form-select">
                                    <option value="">Elige una ciudad</option>
                                    <?php

                                    foreach ($ciudades as $ciudad) {
                                        echo "<option value=\"{$ciudad["city_id"]}\">{$ciudad["city"]}</option>";
                                    }

                                    ?>

                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="codigoPostal" class="form-label">Código Postal</label>
                                <input type="text" name="codigoPostal" id="codigoPostal" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="telefono" class="form-label">Teléfono</label>
                                <input type="tel" name="telefono" id="telefono" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="ubicacion" class="form-label">Ubicación</label>
                                <input type="text" name="ubicacion" id="ubicacion" class="form-control">
                            </div>

                            <div class="mb-3">
                                <button type="submit" name="guardarDireccion" class="btn btn-primary">Guardar datos
                                </button>
                            </div>

                        </form>
                    </div>
                </div>

            </div>

        </div>
    </div>


<?php include_once "partes/parte_foot.php"; ?>