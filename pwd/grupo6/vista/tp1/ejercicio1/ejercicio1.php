
<?php



include_once("../../estructura/cabecera.php");



?>
<script type="text/javascript" src="javascript1.js"></script>
<div class="row mb-3">
<form method="get" action="vernumero.php" onSubmit="return validar();" >
<label for="numero">ingrese un numero:</label>
<input name="numero" id="numero" ></input>
<button type=submit>verificar</button>
</div>

</form>

<?php

include_once("../../estructura/pie.php");

?>