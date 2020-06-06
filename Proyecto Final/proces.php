<?php
    $A=0; $B=0; $C=0; $D=0; $E=0; $F=0; $G=0;
    $n = "datosCrudos.txt";
    $file = fopen($n, "r");
        while (feof($file) == false ){  
            $a = (fgets($file));
            if($a == 0){
                $A += 1;
            }
            if($a == 1){
                $B += 1;
            }
            if($a == 2){
                $C += 1;
            }
            if($a == 3){
                $D += 1;
            }
            if($a == 4){
                $E += 1;
            }
            if($a == 5){
                $F += 1;
            }
            if($a == 6){
                $G += 1;
            }
        }
    $a1 = [$A,$B,$C,$D,$E,$F,$G]    ;           

    $datos = "datos.csv";
        if (file_exists($datos)) {
                $numLineas = count(file($datos));
            } else {
                $numLineas = 0;
            }
        $fp = fopen($datos, "a") or die("No se puede abrir el archivo: $datos");
        $resp = fputcsv($fp, $a1, ',', '"', '"');
        if ($resp === false) {
            die("Error al escribir en CSV");
        }
    fclose($fp) or die("No se puede cerrar el archivo: $datos");