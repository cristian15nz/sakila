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
                                <label for="nombreActor" class="form-label">Nombre</label>
                                <input type="text" name="nombreActor" id="nombreActor" class="form-control"
                                       value="<?= $nombreActor ?>" placeholder="Escribe el nombre">
                            </div>

                            <div class="mb-3">
                                <label for="apellidoActor" class="form-label">Apellido</label>
                                <input type="text" name="apellidoActor" id="apellidoActor" class="form-control"
                                       value="<?= $apellidoActor ?>" placeholder="Escribe el apellido">
                            </div>

                            <div class="mb-3">
                                <button type="submit" name="guardarActor" class="btn btn-primary">
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
                                <th scope="col">Apellido</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php

                            foreach ( $actores as $actor ) {
                                echo "<tr>
                                            <th scope=\"row\">{$actor['actor_id']}</th>
                                            <td>{$actor['first_name']}</td>
                                            <td>{$actor['last_name']}</td>
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