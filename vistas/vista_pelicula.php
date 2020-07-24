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
                                <label for="titulo" class="form-label">Título</label>
                                <input type="text" name="titulo" id="titulo" class="form-control"
                                       value="<?= $titulo ?>" placeholder="Escribe el título">
                                <div class="invalid-feedback">
                                    El titulo no puede estar vacío.
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="descripcion" class="form-label">Descripción</label>
                                <textarea name="descripcion" id="descripcion" class="form-control" cols="30" rows="3"
                                          placeholder="Escribe la descripción"><?= $descripcion ?></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="anoLanzamiento" class="form-label">Año de Lanzamiento</label>
                                <input type="text" name="anoLanzamiento" id="anoLanzamiento" class="form-control"
                                       value="<?= $anoLanzamiento ?>" placeholder="Elige el año de lanzamiento">
                            </div>

                            <div class="mb-3">
                                <label for="idioma" class="form-label">Idioma</label>
                                <select name="idioma" id="idioma" class="form-select">
                                    <option value="">Elige el idioma</option>
                                    <?php

                                    foreach ( $idiomas as $idioma ) {
                                        echo "<option value=\"{$idioma["language_id"]}\">{$idioma["name"]}</option>";
                                    }

                                    ?>

                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="idiomaOriginal" class="form-label">Idioma original</label>
                                <select name="idiomaOriginal" id="idiomaOriginal" class="form-select">
                                    <option value="">Elige el idioma original</option>
                                    <?php

                                    foreach ( $idiomas as $idioma ) {
                                        echo "<option value=\"{$idioma["language_id"]}\">{$idioma["name"]}</option>";
                                    }

                                    ?>

                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="duracionRenta" class="form-label">Duración de la renta</label>
                                <input type="text" name="duracionRenta" id="duracionRenta" class="form-control"
                                       value="<?= $duracionRenta ?>"
                                       placeholder="Escribe la duración de la renta (días)">
                            </div>

                            <div class="mb-3">
                                <label for="tasaRenta" class="form-label">Tasa de renta</label>
                                <input type="text" name="tasaRenta" id="tasaRenta" class="form-control"
                                       value="<?= $tasaRenta ?>" placeholder="Escribe la tasa de la renta">
                            </div>

                            <div class="mb-3">
                                <label for="duracion" class="form-label">Duración de la película</label>
                                <input type="text" name="duracion" id="duracion" class="form-control"
                                       value="<?= $duracion ?>"
                                       placeholder="Escribe la duración de la película (minutos)">
                            </div>

                            <div class="mb-3">
                                <label for="costoReemplazo" class="form-label">Costo de reemplazo</label>
                                <input type="text" name="costoReemplazo" id="costoReemplazo" class="form-control"
                                       value="<?= $costoReemplazo ?>" placeholder="Escribe el costo de reemplazo">
                            </div>

                            <div class="mb-3">
                                <label for="rating" class="form-label">Rating</label>
                                <input type="text" name="rating" id="rating" class="form-control"
                                       value="<?= $rating ?>" placeholder="Elige el rating">
                            </div>

                            <div class="mb-3">
                                <label for="caracteristicasEspeciales" class="form-label">Características
                                    especiales</label>
                                <input type="text" name="caracteristicasEspeciales" id="caracteristicasEspeciales"
                                       class="form-control"
                                       value="<?= $caracteristicasEspeciales ?>"
                                       placeholder="Elige las características especiales">
                            </div>

                            <div class="mb-3">
                                <button type="submit" name="guardarPelicula" class="btn btn-primary">
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
                                <th scope="col">Titulo</th>
                                <th scope="col">Descripción</th>
                                <th scope="col">Año de lanzamiento</th>
                                <th scope="col">Idioma</th>
                                <th scope="col">Idioma Original</th>
                                <th scope="col">Duración de renta</th>
                                <th scope="col">Tasa de renta</th>
                                <th scope="col">Duración</th>
                                <th scope="col">Costo de Reemplazo</th>
                                <th scope="col">Rating</th>
                                <th scope="col">Características Especiales</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php

                            foreach ( $peliculas as $pelicula ) {
                                echo "<tr>
                                            <th scope=\"row\">{$pelicula['film_id']}</th>
                                            <td>{$pelicula['title']}</td>
                                            <td>{$pelicula['description']}</td>
                                            <td>{$pelicula['release_year']}</td>
                                            <td>{$pelicula['language_id']}</td>
                                            <td>{$pelicula['original_language_id']}</td>
                                            <td>{$pelicula['rental_duration']}</td>
                                            <td>{$pelicula['rental_rate']}</td>
                                            <td>{$pelicula['length']}</td>
                                            <td>{$pelicula['replacement_cost']}</td>
                                            <td>{$pelicula['rating']}</td>
                                            <td>{$pelicula['special_features']}</td>
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