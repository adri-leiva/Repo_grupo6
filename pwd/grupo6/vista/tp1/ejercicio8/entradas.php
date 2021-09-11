
    <?php
    include_once("../../estructura/cabecera.php");

        $edad = $_POST['edad'];
        $estudia = $_POST['estudiante'];
        if(isset($_POST['submit'])){
            switch ($estudia) {
                case 'si':
                    if(is_numeric($edad)<12){
                        echo "el precio es de $160.";
                    }
                    if(is_numeric($edad)>=12){
                        echo "el precio es de $180.";
                    }
                    break;
                case 'no':
                        echo "el precio es de $300.";
                    break;
            }
        }
        include_once("../../estructura/pie.php");
    ?>
