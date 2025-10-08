
//  EX13: Multiplica dos números

<form method="GET">
    <input type="number" name="n1">
    <input type="number" name="n2">
    <input type="submit" name="enviar">
</form>

<?php
if (isset($_GET['enviar'])) {
    // recuperamos los datos del formulario
    $n1 = $_GET['n1'];
    $n2 = $_GET['n2'];

    // imprimimos en pantalla el resultado
    echo "$n1 x $n2 es: " . $n1 * $n2;
}