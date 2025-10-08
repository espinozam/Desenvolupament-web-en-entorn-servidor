EX14: Converteix euros a pessetes

<form method="GET">
    <input type="number" name="euros"> €
    <input type="submit" name="enviar">
</form>

<?php
if (isset($_GET['enviar'])){
    // recuperamos datos del formulario
    $euros = $_GET['euros'];
    $pesetas = 166.386;
    echo "$euros € = " . ($euros * $pesetas) . " Pesetas";
}