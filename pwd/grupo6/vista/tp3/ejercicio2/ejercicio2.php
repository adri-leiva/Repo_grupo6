
<?php



include_once("../../estructura/cabecera.php");



?>

    <div class="row">
            <p >Ejercicio 2 – Crear un formulario que permita subir un archivo. En el servidor se deberá controlar
                que el tipo esperado sea txt (texto plano), si es correcto deberá abrir el archivo y mostrar su
                contenido en un textarea.
                (OBS: Referencia a funciones para trabajar con archivos http://php.net/manual/en/ref.filesystem.php)</p>
    </div>
    <div class="">
        <form  method="POST" action="accion.php" enctype="multipart/form-data">
            <input type="file" name="miArchivo" id="miArchivo" accept="" required>
            <input type="submit" name="submit" value="Enviar">
        </form>
    </div>

<?php

include_once("../../estructura/pie.php");

?>