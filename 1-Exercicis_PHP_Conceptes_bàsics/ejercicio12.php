<?php
// EXERCICI 12: Piràmide invertida, vèrtex cap avall.

for ($i=9; $i>-1; $i--) {
    $fila = "";
    for ($j=1; $j<=$i; $j++){
        if ($i == 9 or $i == 1 or $i == 0){
            $fila .= "*"; // dibuja primera linea y dos ultimas lineas de la piramide
        } else {
            if ($j == 1 or $j == $i) {
                $fila .= "*"; // dibuja el contorno
            } else {
                $fila .= "&nbsp;" . "&nbsp;"; // dibuja espacios invisibles
            }
        }

    }
    echo $fila . "<br>";
}

?>