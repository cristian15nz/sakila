<nav class="nav flex-column">

    <?php

    $paginasMenu = [
        "index"     => ["Inicio", "fas fa-home"],
        "actor"     => ["Actor", "fas fa-user-tie"],
        "direccion" => ["Dirección", "fas fa-map-marker-alt"],
        "ciudad"    => ["Ciudad", "fas fa-city"],
        "pais"      => ["País", "fas fa-flag"],
        "categoria" => ["Categoría", "fa fa-tag"],
        "cliente"   => ["Cliente", "fa fa-user-tag"],
        "pelicula"  => ["Película", "fa fa-video"],
        "idioma"    => ["Idioma", "fa fa-language"],
        "personal"  => ["Personal", "fa fa-users"],
        "tienda"    => ["Tienda", "fa fa-store"]

    ];

    foreach ($paginasMenu as $nombreArchivo => $pagina) {
        $icono = $pagina[1];
        $textoPagina = $pagina[0];

        echo "<a class=\"nav-link\" href=\"{$nombreArchivo}.php\">
                <i class=\"{$icono} d-inline-block mr-3\" style='width: 20px;'></i>
                {$textoPagina}
            </a>";
    }

    ?>

</nav>