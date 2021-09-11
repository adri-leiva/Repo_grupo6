
<?php
    include_once("../../estructura/cabecera.php");

        
            $dir = "../../../uploads/";
            //$archivoLink = $_FILES['miArchivo']['link'];
            $tamaño = $_FILES['miArchivo']['size'];
            if($tamaño/1024 < 2000){
                if ($_FILES['miArchivo']["error"] <= 0){
                    echo "Nombre: " . $_FILES['miArchivo']['name'] . "<br />";
                    echo "Tipo: " . $_FILES['miArchivo']['type'] . "<br />";
                    echo "Tamaño: " . ($_FILES['miArchivo']["size"] / 1024) . " kB<br />";
                    echo "link del archivo: <a href=".$dir.$_FILES['miArchivo']['name'].">link archivo: </a><br/>";


                    // Intentamos copiar el archivo al servidor.

                    if (!copy($_FILES['miArchivo']['tmp_name'], $dir.$_FILES['miArchivo']['name'])){
                        echo "ERROR: no se pudo cargar el archivo ";
                    }else{
                        echo "El archivo ". $_FILES['miArchivo']['name']." se ha cargado con Éxito<br/>";
                    }
                }else{
                    echo "ERROR: no se pudo cargar el archivo.";
                }
            }else{
                echo "ERROR: el archivo es muy grande!";
            }

            

include_once("../../estructura/pie.php");


        ?>
    
