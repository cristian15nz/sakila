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
                                <label for="nombreActor" class="form-label">Primer nombre del actor</label>
                                <input type="text" name="nombreActor" id="nombreActor" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="apellidoActor" class="form-label">Apellido del actor</label>
                                <input type="text" name="apellidoActor" id="apellidoActor" class="form-control">
                            </div>

                            <div class="mb-3">
                                <button type="submit" name="guardar_actor" class="btn btn-primary">Guardar datos
                                </button>
                            </div>

                        </form>

                    </div>
                </div>

                <hr>

                <div class="row">
                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                                <th scope="col">ID</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellido</th>
                            </thead>
                            <tbody>
                                <?php

                                foreach ($actores as $actor) {
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