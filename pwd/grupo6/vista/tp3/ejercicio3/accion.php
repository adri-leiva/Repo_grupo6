
<?php


include_once("../../estructura/cabecera.php");
?>

<?php
if($_POST){
    $titulo = $_POST['titulo'];
    $actores = $_POST['actores'];
    $director = $_POST['director'];
    $guion = $_POST['guion'];
    $produccion = $_POST['produccion'];
    $anio = $_POST['anio'];
    $nacionalidad = $_POST['nac'];
    $genero = $_POST['genero'];
    $duracion = $_POST['duracion'];
    $resticcionEdad = $_POST['radio'];
    $sinopsis = $_POST['sinopsis'];
    echo "<h1>La pelicula introducida es</h1>";
    echo "<b>Título:</b> $titulo <br>";
    echo "<b>Actores:</b> $actores <br>";
    echo "<b>Director:</b> $director <br>";
    echo "<b>Guion:</b> $guion <br>";
    echo "<b>Produccion:</b> $produccion <br>";
    echo "<b>Año:</b> $anio <br>";
    echo "<b>Nacionalidad:</b> $nacionalidad <br>";
    echo "<b>Genero:</b> $genero <br>";
    echo "<b>Duracion:</b> $duracion <br>";
    echo "<b>Sinopsis</b> $sinopsis <br>";
    
    $dir = ("../../../imagenes/");
    $tamaño = $_FILES['miArchivo']['size'];
    
    if($tamaño/1024 < 2000){
        if ($_FILES['miArchivo']["error"] <= 0){
            echo "<b>poster oficial:</b> <br><img src=".$dir.$_FILES['miArchivo']['name']." alt="."imagen"."><br/>";

            if (!copy($_FILES['miArchivo']['tmp_name'], $dir.$_FILES['miArchivo']['name'])){
                false;//echo "ERROR: no se pudo cargar el archivo ";
            }else{
                true;//echo "El archivo ". $_FILES['miArchivo']['name']." se ha cargado con Éxito<br/>";
            }
        }else{
            echo "ERROR: no se pudo cargar el archivo.";
        }
    }else{
        echo "ERROR: el archivo es muy grande!";
    }
}

include_once("../../estructura/pie.php");

?>