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

                <table class="table">
                    <thead>
                        <th scope="col">ID</th>
                        <th scope="col">Idioma</th>
                    </thead>
                    <tbody>

                    <?php

                    foreach ($paises as $pais) {
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