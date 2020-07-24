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
                                <label for="nombrePais" class="form-label">Nombre</label>
                                <input type="text" name="nombrePais" id="nombrePais" class="form-control"
                                       value="<?= $nombrePais ?>" placeholder="Escribe el nombre del pais">
                            </div>

                            <div class="mb-3">
                                <button type="submit" name="guardarPais" class="btn btn-primary">
                                    <i class="fas fa-save"></i> Guardar
                                </button>
                            </div>

                        </form>

                        <?php include_once "partes/parte_mensajes.php"; ?>
                    </div>
                </div>

                <hr>

                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Idioma</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php

                    foreach ( $paises as $pais ) {
                        echo "<tr>
                                <td>{$pais['country_id']}</td>
                                <td>{$pais['country']}</td>
                            </tr>";
                    }

                    ?>
                    </tbody>
                </table>

            </div>

        </div>
    </div>

<?php include_once "partes/parte_foot.php"; ?>