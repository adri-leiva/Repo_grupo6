
    <?php


include_once("../../estructura/cabecera.php");



?>
    
    <div id="container">
        <h1>HORARIOS DE CURSADO</h1>
    <form id="form1" name="form1" action="accion.php" method="get">
<table id="table">
 <tr><td>Lunes:</td><td><input name="lunes" id="lunes" ></input></td></tr>
 <tr><td>Martes:</td><td><input name="martes" id="martes" ></input></td></tr>
 <tr><td>Miercoles:</td><td><input name="miercoles" id="miercoles" ></input></td></tr>
 <tr><td>Jueves:</td><td><input name="jueves" id="jueves" ></input></td></tr>
 <tr><td>Viernes:</td><td><input name="viernes" id="viernes" ></input></td></tr>
</table><br>
<input type="submit" name="submit" value="Continuar">
    </form>

    </div>

    <?php

include_once("../../estructura/pie.php");

?>
