<?php


    

include_once("../../estructura/cabecera.php");
?>



    <LINK REL=StyleSheet HREF="informacion.css" TYPE="text/css" MEDIA=screen>

    <form id="form1" name="form1" method="post" action="respuesta.php">
        Nombre:
        <br><input type="text" name="nombre" id="nombre"><br><br>
        Apellido:
        <br><input type="text" name="apellido" id="apellido"><br><br>
        Edad:
        <br><input type="text" name="edad" id="edad"><br><br>
        Direccion:
        <br><input type="text" name="direccion" id="direccion"><br><br>
        Sexo:
        <br><select name="sexo" id="sexo">
            <option>Masculino</option>
            <option>Femenino</option>
        </select><br><br>
        <input type="radio" id="uno" name="radio" value="uno">no tiene estucios<br> 
        <input type="radio" id="dos" name="radio" value="dos">estudios primario<br>
        <input type="radio" id="tres" name="radio" value="tres">estudios secundario<br><br>
        <input type="checkbox"  name="checkbox[]" value="1">Futbol
        <input type="checkbox"  name="checkbox[]" value="1">Basket
        <input type="checkbox"  name="checkbox[]" value="1">Tennis
        <input type="checkbox"  name="checkbox[]" value="1">Voley <br><br>
        <input type="submit" name="submit" id="submit" value="Enviar"/>
    </form>
    <?php

include_once("../../estructura/pie.php");

?>