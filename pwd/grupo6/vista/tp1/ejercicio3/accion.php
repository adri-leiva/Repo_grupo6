<?php

include_once("../../estructura/cabecera.php");

$datos=$_POST;

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

echo "Hola, yo soy ".$nombre." ".$apellido." tengo ".$edad." años y vivo en ".$direccion." .";
include_once("../../estructura/pie.php");


?>