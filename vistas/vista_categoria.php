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
                                <label for="nombreCategoria" class="form-label">Nombre</label>
                                <input type="text" name="nombreCategoria" id="nombreCategoria" class="form-control"
                                       value="<?= $nombreCategoria ?>" placeholder="Escribe el nombre de la categoría">
                            </div>

                            <div class="mb-3">
                                <button type="submit" name="guardarCategoria" class="btn btn-primary">
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
                                <th scope="col">Nombre</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php

                            foreach ( $categorias as $categoria ) {
                                echo "<tr>
                                        <td>{$categoria['category_id']}</td>
                                        <td>{$categoria['name']}</td>
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