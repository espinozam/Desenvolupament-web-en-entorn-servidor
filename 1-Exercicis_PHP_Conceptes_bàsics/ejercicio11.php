<?php
// EXERCICI 11: Piràmide buida (contorn només) amb bifocades.


// $i++ suma 1 antes de ejecutar el bloque dentro del bucle
// ++$i
for ($i=0; $i<9; $i++){
    $columna = ""; // gurdamos el dibujo de fila

    for ($j=0; $j<$i+1; $j++){
        if ($i<2 or $i == 8){
            // dibujar dos primeras filas y la última fila de la piramide
            $columna .= "*";
        } else {
            if ($j == 0 or $i == $j){
                // dibujar exteriores
                $columna .= "*";
            } else {
                // dibuja espacios invisibles
                $columna .= "&nbsp;" . "&nbsp;";
            }
        }

    }
    echo $columna;
    echo "<br>";
}
