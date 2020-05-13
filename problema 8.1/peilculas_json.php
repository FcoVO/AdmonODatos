<?php

require_once('./ClassContacto.php');

$archivo_json = "peliculas.json";

$pelicula1 = new pelicula(
    "The Matrix",
    "Suspenso/Ciberpunk/Acción",
    "131 minutos",
    "R",
    "Laurence Fishburne/Keanu Reeves"
);

$pelicula2 = new pelicula(
    "Terminator",
    "Acción/Ciencia ficción",
    "108 min",
    "R",
    "Arnold Schwarzenegger/Linda Hamilton/Michael Biehn",
);

$peliculas = array();

$peliculas[] = $pelicula1;

$peliculas[] = $pelicula2;

$json_string = json_encode($peliculas);

$arch = fopen($archivo_json, 'w');
if ($arch == false) {
    echo ("Error al abrir el archivo");
    exit();
}
fwrite($arch, $json_string);
fclose($arch);
echo '<h3>Datos escritos en pelicula.json </h3>';
header("refresh:2;url=mostrar_json.php");
