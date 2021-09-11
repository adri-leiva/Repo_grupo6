
<?php



include_once("../../estructura/cabecera.php");



?>
    <form action="accion.php" method="get">
    <table>
    <tr><td>Nombre:</td><td><input name="nombre" id="nombre" ></input></tr>
    <tr><td>Apellido</td><td><input name="apellido" id="apellido" ></input></tr>
    <tr><td>Edad:</td><td><input name="edad" id="edad" ></input></tr>
    <tr><td>Direccion:</td><td><input name="direccion" id="direccion" ></input></tr>
    </table>
    <input type="submit" name="submit" value="Continuar"></form>
    

    <?php

include_once("../../estructura/pie.php");

?>