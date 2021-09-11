
    
    <?php



include_once("../../estructura/cabecera.php");
?>
    
    <form name="form1" id="form1" method="post" action="resultado.php">
        <input type="text" name="n1" id=n1><br>
        <input type="text" name="n2" id=n2><br>
        <select name="operacion" id="operacion">
            <option value="suma">Suma</option>
            <option value="resta">Resta</option>
            <option value="multiplicacion">Multiplicacion</option>
            <option value="division">Division</option>
        </select>
        <input type="submit" name="submit" id="submit" value="enviar">
    </form>

    <?php

include_once("../../estructura/pie.php");

?>
