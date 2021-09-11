
<?php
    include_once("../../estructura/cabecera.php");
?>

    <div class="row bg-secondary pt-5 pb-5">
        <div class="col-md-3 offset-md-4.5 mx-auto mt-5 mb-5 rounded-3 border bg-white">
            <form class="mt-4 mb-5 was-validated" name="form1" id="form1" method="post" action="verificaPass.php">
                <div class="row col-md offset-md mb-3">
                    <h4 class="text-center" >Member Login</h4>
                </div>    
                <div class="row">
                    <div class="col-md offset-md">
                        <label for="staticEmail2" class="visually-hidden">Email</label>
                        <input type="text" name="email" class="form-control" id="staticEmail2" placeholder="Email" required>
                    </div>
                </div>
                <div class="row pt-2">
                    <div class="col-md offset-md">
                        <label for="inputPassword2" class="visually-hidden">Password</label>
                        <input type="password" name="password" class="form-control" id="inputPassword2" placeholder="Password" minlength="8" required>
                    </div>
                </div>
                <div class="row pt-2">
                    <div class="col-md offset-md">
                        <button type="submit" class="btn btn-success container-md">Entrar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <?php

include_once("../../estructura/pie.php");

?>
