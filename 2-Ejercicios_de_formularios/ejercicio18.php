✏️ EXERCICI 18
Escriu un programa que calculi l'àrea d'un triangle.
<h3>Exercici 18: Àrea d'un triangle</h3>
<form method="post">
    Base: <input type="number" name="base" required>
    Alçada: <input type="number" name="altura" required>
    <input type="submit" name="enviar" value="Calcula">
</form>

<?php
if (isset($_POST["enviar"])) {
    // recuperamos los datos del formulario y almacenamos el calculo en una variable
    $area = ($_POST["base"] * $_POST["altura"]) / 2;

    // mostramos el resultado
    echo "Àrea del triangle: " . $area;
}
?>