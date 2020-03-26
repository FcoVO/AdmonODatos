<?php
$vuelos = array(
    array('ID','Origen','Destino','Duracion'),
    array('1','New York','London','415'),
    array('2','Shangai','Paris','760'),
    array('3','Istambul','Tokyo','700'),
    array('4','New York','Paris','435'),
    array('5','Moscow','Paris','245'),
    array('6','Lima','New York','455')
);
$fn = "Vuelos2.csv";
$file = fopen($fn,'w') or die ("No se puede abrir el archivo: $nf ");

foreach ($vuelos as $vuelo) {
    $resp = fputcsv($file, $vuelo,',','"','"');

    if ($resp === false) {
        die("Error al escribir en CSV");
    }
}

fclose($file) or die ("No se puede cerrar el archivo: $fn");

echo("<h1> Revisa el archivo: $fn </h1>");

