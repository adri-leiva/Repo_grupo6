
<?php


include_once("../../estructura/cabecera.php");
?>

    <div class="">
        <?php
            $dir = "../../../uploads/";
            
            $formato = array('.txt');
            if(isset($_POST['submit'])){
                $archivo = $_FILES['miArchivo']['name'];
                $tmpArchivo = $_FILES['miArchivo']['tmp_name'];
                $extencion = substr($archivo, strrpos($archivo, '.'));
                if(in_array($extencion, $formato)){
                    if(move_uploaded_file($tmpArchivo,$dir.$archivo)){
                        echo "El archivo $archivo se ha cargado con Éxito<br/>CONTENIDO:<br>";
                    }
                    $contenido = fopen($dir.$archivo, "r") or die ("error al leer archivo");
                    while(!feof($contenido)){
                        $linea = fgets($contenido);
                        $saltoLinea = nl2br($linea);
                        echo $saltoLinea;
                    }
                    fclose($contenido);
                }else{
                    echo "el archivo no es de texto!";
                }
            }
        ?>
    </div>

<?php
include_once("../../estructura/pie.php");
?>