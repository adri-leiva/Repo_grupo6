
    <?php


include_once("../../estructura/cabecera.php");



?>

    <?php
    $array_hs=$_GET;
    $totalhs=0;
    $claves="";
    foreach($array_hs as $clave => $horas){
        if(is_numeric($horas)){
        $totalhs=$totalhs+$horas;
        }
    $claves=$claves." ".$clave;
    }
    echo "La cantidad de horas de cursado de PWD son ".$totalhs.".<br>";
    echo $claves;
    include_once("../../estructura/pie.php");

    ?>
