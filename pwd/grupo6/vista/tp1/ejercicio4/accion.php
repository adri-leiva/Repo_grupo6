<?php

include_once("../../estructura/cabecera.php");

$datos=$_GET;

foreach($datos as $clave => $valor){

    if($clave=="nombre"){
        $nombre=$valor;
    }
    if($clave=="apellido"){
        $apellido=$valor;
    }
    if($clave=="edad"){
        $edad=$valor;
    }
    if($clave=="direccion"){
        $direccion=$valor;
    }
}

if($edad>=18){

echo "Hola, yo soy ".$nombre." ".$apellido." tengo ".$edad." años y vivo en ".$direccion." .";

}
else{
    echo "Hola, yo soy ".$nombre." ".$apellido." tengo ".$edad." años soy menor de edad y vivo en ".$direccion." .";
}


include_once("../../estructura/pie.php");
?>