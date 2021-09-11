
    <?php

    include_once("../../estructura/cabecera.php");

    if ($_POST){
        
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $edad = $_POST['edad'];
        $direccion = $_POST['direccion'];
        $estudios = $_POST['radio'];
        $sexo = $_POST['sexo'];

        if(isset($_POST['submit'])){  // suma la cantidad de deportes
 
            $checkbox = $_POST['checkbox']; // Devuelve un array que contiene los valores de los campos activos
            
            $suma = 0;
            if(count($checkbox) > 0){ // Me fijo si hay algun valor seleccionado, sino estaría el IF provocaría un warning del PHP
            
                foreach($checkbox as $valor){ // Recorre el array
                
                $suma += $valor; // Va sumando los valores
                }
            }
        }
        

        if($edad>="18"){
            echo "<h2>Hola yo soy $nombre, $apellido tengo $edad años, vivo en $direccion<br><br>
            soy mayor de edad<br><br>mi sexo es, $sexo<br><br>juego, $suma deportes<h2>";
        }else{
            echo "<h2>Hola yo soy $nombre, $apellido tengo $edad años, vivo en $direccion<br><br>
            soy menor de edad<br><br>mi sexo es, $sexo<br><br>juego, $suma deportes<h2>";
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


