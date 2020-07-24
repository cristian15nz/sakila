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
                                <label for="nombreCiudad" class="form-label">Nombre</label>
                                <input type="text" name="nombreCiudad" id="nombreCiudad" class="form-control"
                                       value="<?= $nombreCiudad ?>" placeholder="Digite el nombre de la ciudad">
                            </div>

                            <div class="mb-3">
                                <label for="pais" class="form-label">País</label>
                                <select name="pais" id="pais" class="form-select">
                                    <option value="">Seleccione un país</option>

                                    <?php

                                    foreach ( $paises as $pais ) {
                                        echo "<option value=\"{$pais['country_id']}\">{$pais['country']}</option>";
                                    }

                                    ?>
                                </select>
                            </div>

                            <div class="mb-3">
                                <button type="submit" name="guardarCiudad" class="btn btn-primary">
                                    <i class="fas fa-save"></i> Guardar
                                </button>
                            </div>

                        </form>

                        <?php include_once "partes/parte_mensajes.php"; ?>

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Pais</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php

                            foreach ( $ciudades as $ciudad ) {
                                echo "<tr>
                                            <th scope=\"row\">{$ciudad['city_id']}</th>
                                            <td>{$ciudad['city']}</td>
                                            <td>{$ciudad['country']}</td>
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