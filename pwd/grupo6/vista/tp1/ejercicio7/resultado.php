
    <?php



include_once("../../estructura/cabecera.php");
        if($_POST){
            $n1 = $_POST['n1'];
            $n2 = $_POST['n2'];
            $operacion = $_POST['operacion'];
            if(isset($_POST['submit'])){
                switch($operacion){
                    case "suma":
                        $resultado = $n1+$n2;
                        echo "<h3>el resulatdo es: $resultado<h3>";
                        break;
                    case "resta":
                        $resultado = $n1-$n2;
                        echo "<h3>el resulatdo es: $resultado<h3>";
                        break;
                    case "multiplicacion":
                        $resultado = $n1*$n2;
                        echo "<h3>el resulatdo es: $resultado<h3>";
                        break;
                    case "division":
                    $resultado = $n1/$n2;
                    echo "<h3>el resulatdo es: $resultado<h3>";
                    break;
                }
            }   
            
        }else{
            echo "realice una operacion.";
        }

        include_once("../../estructura/pie.php");
    ?>
