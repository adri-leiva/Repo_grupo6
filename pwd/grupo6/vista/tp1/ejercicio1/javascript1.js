
function validar(){
var numero = document.getElementById("numero").value;
var respuesta = true;
if(isNaN(numero)){
    alert("Ingrese un valor numerico");
    respuesta=false;
}else if(numero == ""){
    alert("ingrese un numero");
    respuesta=false;
}
return respuesta;

}
