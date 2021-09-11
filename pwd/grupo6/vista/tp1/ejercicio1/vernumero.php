
    <?php

include_once("../../estructura/cabecera.php");


        $resultado= $_GET["numero"]/2;
        if (is_int($resultado)){
            $esPar="PAR";
        }else{
            $esPar="IMPAR";
        }
        if($resultado==0){
            $esPar="CERO";
        }
        echo "el numero es ".$esPar;
    ?>

    <br>
    <a href="ejercicio1.php">VOLVER ATRAS</a>

    <?php

include_once("../../estructura/pie.php");

?>
