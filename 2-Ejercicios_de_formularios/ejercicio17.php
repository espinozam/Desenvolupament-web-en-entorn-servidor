
EXERCICI 17 Escriu un programa que calculi l'àrea d'un rectangle.

<form method="post">
    Base: <input type="number" name="base" required>
    Alçada: <input type="number" name="altura" required>
    <input type="submit" name="enviar" value="Calcular">
</form>
<?php
if (isset($_POST["enviar"])) {
    // recuperamos los datos del formulario y almacenamos el calculo en una variable
    $area = $_POST["base"] * $_POST["altura"];

    // mostramos el resultado
    echo "Àrea del rectangle: " . $area;
}
?>
