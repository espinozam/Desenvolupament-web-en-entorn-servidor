
✏️ EXERCICI 15 Realitza un conversor de pessetes a euros. La quantitat en pessetes que es vol convertir s'haurà d'introduir per teclat.

<form method="GET">
    <input type="number" name="pesetas"> Pesetas
    <input type="submit" name="enviar">
</form>

<?php
if (isset($_GET['enviar'])){
    // recuperamos datos del formulario
    $pesetas = $_GET['pesetas'];
    $pesetasconv = 166.386;
    echo "$pesetas Pesetas = " . round($pesetas / $pesetasconv, 2) . " €";
}