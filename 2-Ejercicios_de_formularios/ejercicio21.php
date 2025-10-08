<h3>EXERCICI 21: Calcula el volum d'un con<h3>

<form method="post">
    Radio: <input type="number" name="radio"> <br>
    Altura: <input type="number" name="altura">
    <input type="submit" name="enviar" value="Calcular">
</form>

<?php
if (isset($_POST['enviar'])) {
    // recuperamos datos del formulario
    $radio = $_POST['radio'];
    $altura = $_POST['altura'];

    // Fórmula del volum d'un con: V = (1/3) * π * r^2 * h
    // calculamos el volumen del cono
    $volum = (1/3) * M_PI * $radio**2 * $altura;

    // mostramos el resultado
    echo "El volum del con és: " . $volum;
}
?>

