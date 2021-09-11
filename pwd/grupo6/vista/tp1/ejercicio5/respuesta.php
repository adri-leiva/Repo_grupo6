
    <?php


include_once("../../estructura/cabecera.php");
    if ($_GET){
        
        $nombre = $_GET['nombre'];
        $apellido = $_GET['apellido'];
        $edad = $_GET['edad'];
        $direccion = $_GET['direccion'];
      $estudios=$_GET['radio'];

        

        if($edad>="18"){
            echo "<h2>Hola yo soy $nombre, $apellido tengo $edad años y vivo en $direccion<br><br>y soy mayor de edad<h2>";
        }else{
            echo "<h2>Hola yo soy $nombre, $apellido tengo $edad años y vivo en $direccion<br><br>y soy menor de edad<h2>";
        }

        if($estudios=="uno"){
            echo "no tienes estudios";
        }elseif($estudios=="dos"){
            echo "estudios primarios completos";
        }elseif($estudios=="tres"){
            echo "estudios secundarios completos";
        }
    }else{
        echo "<h2>No se recibieron datos<h2>";
    }
    include_once("../../estructura/pie.php");


    ?>

