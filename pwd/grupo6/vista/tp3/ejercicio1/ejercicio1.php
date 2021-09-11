<?php
    include_once("../../estructura/cabecera.php");
?>
<body>
    <div class="row">
            <p >Ejercicio 1 – Crear un formulario HTML que permita subir un archivo. En el servidor se deberá
        controlar, antes de guardar el archivo, que los tipos validos son .doc o pdf y además el tamaño
        máximo permitido es de 2mb. En caso que se cumplan las condiciones mostrar un link al archivo
        cargado, en caso contrario mostrar un mensaje indicando el problema. 
        </p>
    </div>
    <div class="">
        <form  method="POST" action="accion.php" enctype="multipart/form-data">
            <input type="file" name="miArchivo" id="miArchivo" accept=".doc,.docx,application/msword,application/pdf,application/vnd.openxmlformats-officedocument.wordprocessingml.document" required>
            <input type="submit" value="Enviar">
        </form>
    </div>
</body>
<?php

include_once("../../estructura/pie.php");
?>
