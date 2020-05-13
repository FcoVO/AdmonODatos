<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/estilos.css">
    <title>Mostrando contactos json</title>
</head>

<body>
    <?php

    $archivo = 'peliculas.json';

    if (file_exists("$archivo")) {

        $x = fopen($archivo, 'r')
            or die("Error: No se puede abrir el archivo json");

        $size = filesize($archivo);

        $contenido = fread($x, $size);
        fclose($x);

        $listaContactos = json_decode($contenido, true);

        $numContactos = count($listaContactos);
    ?>

        <div class="container">
            <h1 class="titulo">Lista de Contactos</h1>
            <div class="table-responsive">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th>Nombre</th>
                            <th>Genero</th>
                            <th>Duración</th>
                            <th>Clasificación</th>
                            <th>Protagonistas</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        for ($i = 0; $i < $numContactos; $i++) {
                            echo '<tr>';

                            echo '<td>' . $listaContactos[$i]['nombre'] . '</td>';
                            echo '<td>' . $listaContactos[$i]['Genero'] . '</td>';
                            echo '<td>' . $listaContactos[$i]['Duración'] . '</td>';
                            echo '<td>' . $listaContactos[$i]['Clasificación'] . '</td>';
                            echo '<td>' . $listaContactos[$i]['Protagonistas'] . '</td>';
                            echo '</tr>';
                        }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>

    <?php
    }
    ?>
</body>

</html>