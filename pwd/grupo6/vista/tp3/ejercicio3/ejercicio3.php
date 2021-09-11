

<?php


include_once("../../estructura/cabecera.php");
?>
    
    <div class="border rounded-3">
        <div class="text-info border container rounded-3">
            <h2>Cinem@s</h2>
        </div>
        <form class="row g-2 mx-2 mb-2 mt-2" name="form1" id="form1" method="post" action="accion.php" enctype="multipart/form-data">
            <div class="col-md-6">
                Titulo:<input class="form-control" type="text" name="titulo" required>
            </div>
            <div class="col-md-6">
                Actores:<input class="form-control" type="text" name="actores" required>
            </div>
            <div class="col-md-6">
                Director:<input class="form-control" type="text" name="director" required>
            </div>
            <div class="col-md-6">
                Guion:<input class="form-control" type="text" name="guion" required>
            </div>
            <div class="col-md-6">
                Procuccion:<input class="form-control" type="text" name="produccion" required>
            </div>
            <div class="col-lg-2">
                Año:<input class="form-control" type="text" name="anio"maxlength="4" size="1" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" required> 
            </div>
            <div class="col-md-6">
                Nacionalidad:<input class="form-control" type="text" name="nac" required>
            </div>
            <div class="col-lg-2">
                Genero:<select value="Genero" class="form-control" placeholder="Genero" name="genero" required>
                    <option placeholder="Genero" >Genero</option>
                    <option>accion</option>
                    <option>ficcion</option>
                </select>
            </div>
            <div class="col-md-6">
                
                    Duracion:<input class=" col-lg-3 form-control" type="text" name="duracion" maxlength="3" size="1" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" required>(minutos)
                
            </div>
            <div class="col-md-6">
                Restricciones de edad:<br>
                <input type="radio" name="radio" required>Todo Publico
                <input type="radio" name="radio" required>Mayores de 7 años
                <input type="radio" name="radio" required>Mayores de 18 años
            </div>
            <div class="col-lg-12">
                Sinopsis:<textarea class="form-control" name="sinopsis" required></textarea>
            </div>
            <div class=" col-md-6">
                Imagen de Pelicula:<input class="form-control" type="file" name="miArchivo" id="miArchivo" accept="image/*" required>
            </div>
            <div class="col-12 mt-2">
                <input class="col-lg-1 form-control btn btn-primary" style="" type="submit" value="Enviar">
                
            </div>
            <div class="col-12 mt-2">
                <input class="col-lg-1 form-control  " style="aling: asolute" type="reset" value="Borrar">
            </div>
        </form>
    </div>
    <?php
include_once("../../estructura/pie.php");
?>