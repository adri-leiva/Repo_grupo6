
    <?php

include_once("../../estructura/cabecera.php");
        $email = $_POST['email'];
        $password = $_POST['password'];

        $cuentas = ['usuario'=>"hola", 'clave'=>"hola1234"];
        print_r($cuentas);
        echo $cuentas['usuario'].", ".$cuentas['clave'];
        if($cuentas['usuario']==$email && $cuentas['clave']==$password){
            echo "<br>bienvenido al sitio.<br>";
        }else{
            echo "<br>error<br>";
        }

        include_once("../../estructura/pie.php");
    ?>
