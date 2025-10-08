✏️ EXERCICI 19
Escriu un programa que calculi el total d'una factura a partir de la base imposable.
<h3>Exercici 19: Total factura (IVA 21%)</h3>
<form method="post">
    Base imponible: <input type="number" name="base" step="0.01" required>
    <input type="submit" name="enviar" value="Calcula">
</form>
<?php
if (isset($_POST["enviar"])) {
    // recuperamos el valor de base imponible
    $base = $_POST["base"];

    // calculamos los impuestos para la base
    $iva = $base * 0.21;

    // calculamos el total y lo mostramos
    $total = $base + $iva;
    echo "Base: $base €<br>IVA (21%): $iva €<br><b>Total: $total €</b>";
}
?>