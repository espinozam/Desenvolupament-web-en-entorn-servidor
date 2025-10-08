<h3> EXERCICI 22: Convertidor de Mb a Kb</h3>
<form method="post">
    Mb: <input type="number" name="mb"><br>
    <input type="submit" name="enviar" value="Convertir a Kb">
</form>
<?php
if (isset($_POST['enviar'])) {
    // datos del formulario
    $mb = $_POST['mb'];

    // covertir Mb a Kb
    $kb = $mb * 1024;

    echo "$mb MB són $kb KB";
}
?>