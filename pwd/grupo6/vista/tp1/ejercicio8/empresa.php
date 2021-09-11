
    <?php


    

include_once("../../estructura/cabecera.php");
?>
    
    <form name="form1" id="form1" method="post" action="entradas.php">
        Edad:
        <input type="text" name="edad" id="edad" required><br><br>
        estudiante:
        <select name="estudiante">
            <option value="si">Si</option>
            <option value="no">No</option>
        </select>
        <input type="submit" name="submit" value="enviar">
        <input type="reset" name="submit" value="limpiar">
    </form>
    <?php

include_once("../../estructura/pie.php");

?>
