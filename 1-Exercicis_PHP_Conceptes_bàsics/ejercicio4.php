<!--  EXERCICI 04: Mostra el teu horari de classe amb una taula HTML i PHP intercalat. -->

<DOCTYPE html>
<hotml>
<head><title>Mi horario</title></head>
<body>
    <table border="1">
    <tr>
        <td>Hora</td>
        <td>Lunes</td>
        <td>Martes</td>
        <td>Miercoles</td>
        <td>Jueves</td>
        <td>Viernes</td>
    </tr>
    <?php
    echo "<tr>
        <td>15:30 - 16:25</td><td>Interfaz Web</td>
        <td>Entorno servidor</td>
        <td>Entorno servidor</td>
        <td>IPO 2</td>
        <td>Entorno cliente</td>
    </tr>";
    echo "<tr>
        <td>16:20 - 17:20 </td><td>Interfaz Web</td>
        <td>Entorno servidor</td>
        <td>Entorno servidor</td>
        <td>IPO 2</td>
        <td>Entorno cliente</td>
    </tr>";
    echo "<tr>
        <td>17:20 - 18:15</td><td>Admin contenedores</td>
        <td>Proj Intermodular</td>
        <td>Entorno cliente</td>
        <td>Sost aplicada</td>
        <td>Entorno cliente</td>
    </tr>";

    ?>
    </table>
</body>
