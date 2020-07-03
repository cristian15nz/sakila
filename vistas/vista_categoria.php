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
                    <div class="col-md-12">

                        <table class="table">
                            <thead>
                                <th scope="col">ID</th>
                                <th scope="col">Nombre</th>
                            </thead>
                            <tbody>
                            <?php

                            foreach ($categorias as $categoria) {
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