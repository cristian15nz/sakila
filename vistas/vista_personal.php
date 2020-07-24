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
                                <label for="nombrePersonal" class="form-label">Nombre</label>
                                <input type="text" name="nombrePersonal" id="nombrePersonal" class="form-control"
                                       value="<?= $nombrePersonal ?>" placeholder="Escribe el nombre">
                            </div>

                            <div class="mb-3">
                                <label for="apellidoPersonal" class="form-label">Apellido</label>
                                <input type="text" name="apellidoPersonal" id="apellidoPersonal" class="form-control"
                                       value="<?= $apellidoPersonal ?>" placeholder="Escribe el apellido">
                            </div>

                            <div class="mb-3">
                                <label for="idDireccion" class="form-label">Direccion</label>
                                <select name="idDireccion" id="idDireccion" class="form-select">
                                    <option value="">Elige una dirección</option>
                                    <?php

                                    foreach ( $direcciones as $direccion ) {
                                        echo "<option value='{$direccion['address_id']}'>{$direccion['address']}</option>";
                                    }

                                    ?>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="imagen" class="form-label">Imagen</label>
                                <div class="form-file">
                                    <input type="file" class="form-file-input" id="imagen" name="imagen">
                                    <label class="form-file-label" for="imagen">
                                        <span class="form-file-text">Elige una imagen...</span>
                                        <span class="form-file-button">Elegir archivo</span>
                                    </label>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" name="email" id="email" class="form-control"
                                       value="<?= $email ?>" placeholder="Escribe el usuario">
                            </div>

                            <div class="mb-3">
                                <label for="idTienda" class="form-label">Tienda</label>
                                <select name="idTienda" id="idTienda" class="form-select">
                                    <option value="">Elige una tienda</option>
                                    <?php

                                    foreach ( $tiendas as $tienda ) {
                                        echo "<option value='{$tienda['store_id']}'>{$tienda['store_id']}</option>";
                                    }

                                    ?>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="usuario" class="form-label">Usuario</label>
                                <input type="text" name="usuario" id="usuario" class="form-control"
                                       value="<?= $usuario ?>" placeholder="Escribe el usuario">
                            </div>

                            <div class="mb-3">
                                <label for="contrasena" class="form-label">Contraseña</label>
                                <input type="password" name="contrasena" id="contrasena" class="form-control"
                                       value="<?= $contrasena ?>" placeholder="Escribe la contraseña">
                            </div>

                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" value="<?= $activo ?>"
                                       name="activo" id="activo" checked>
                                <label class="form-check-label" for="activo">
                                    Activo
                                </label>
                            </div>

                            <div class="mb-3">
                                <button type="submit" name="guardarPersonal" class="btn btn-primary">
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
                                <th scope="col">Dirección</th>
                                <th scope="col">Imagen</th>
                                <th scope="col">Email</th>
                                <th scope="col">Tienda id</th>
                                <th scope="col">Activo</th>
                                <th scope="col">Usuario</th>
                                <th scope="col">Contraseña</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php

                            foreach ( $personales as $personal ) {

                                if ( ! empty($personal['picture']) ) {
                                    $rutaImagen = "data:image/png;base64," . base64_encode($personal['picture']);
                                } else {
                                    $rutaImagen = '';
                                }

                                echo "<tr>
                                            <th scope=\"row\">{$personal['staff_id']}</th>
                                            <td>{$personal['name']}</td>
                                            <td>{$personal['address']}</td>
                                            <td> <img class='img-thumbnail' src='{$rutaImagen}' alt='imagen_{$personal['first_name']}'> </td>
                                            <td>{$personal['email']}</td>
                                            <td>{$personal['store_id']}</td>
                                            <td>{$personal['activo']}</td>
                                            <td>{$personal['username']}</td>
                                            <td>{$personal['password']}</td>
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