<h3>✏️ EXERCICI 23 Realitza un conversor de Kb a Mb.</h3>
<form method="post">
    Kb <input type="number" name="kb"><br>
    <input type="submit" name="enviar">
</form>

<?php
IF (isset($_POST['enviar'])){
    // datos del formulario
    $kb = $_POST['kb'];

    // convertir Kb a Mb
    $mb = $kb / 1024;

    echo "$kb Kb son: $mb Mb";
}