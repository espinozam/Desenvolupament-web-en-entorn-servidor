✏️ EXERCICI 16 Escriu un programa que sumi, resti, multipliqui i divideixi dos números introduïts per teclat.


<h3>Ex16: Operacions bàsiques</h3>
<form method="post">
    <input type="number" name="a" required>
    <input type="number" name="b" required>
    <input type="submit" name="enviar">
</form>
<?php
if (isset($_POST["enviar"])) {
    // recuperamos los valores del formulario
    $a = $_POST["a"];
    $b = $_POST["b"];
    // mostramos el resultado de la operación
    echo "Suma: " . ($a + $b) . "<br>";
    echo "Resta: " . ($a - $b) . "<br>";
    echo "Mult: " . ($a * $b) . "<br>";
    echo "Div: " . ($b != 0 ? $a / $b : "No es pot dividir per 0");
}
?>