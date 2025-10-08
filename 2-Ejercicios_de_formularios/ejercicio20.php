✏️ EXERCICI 20
Escriu un programa que calculi el salari setmanal d'un treballador en base a les hores treballades. Es pagaran 12 euros per hora.

<h3>Exercici 20: Salari setmanal</h3>
<form method="post">
    Horas trabajadas: <input type="number" name="horas" required>
    <input type="submit" name="enviar" value="Calcula">
</form>
<?php
if (isset($_POST["enviar"])) {
    // datos del formulario
    $horas = $_POST["horas"];
    $precioHora = 12;
    $salario = $horas * $precioHora;

    // mostrar resultado por pantalla
    echo "Salari setmanal: " . $salario . " €";
}
?>
