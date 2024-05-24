<?php

    include_once("../config/db.php");
    require '../models/userModel.php';

    if(isset($_POST['registro'])){
        $name = trim(isset($_POST['alias']) ? $_POST['alias'] : false);
        $email = trim(isset($_POST['correo']) ? $_POST['correo'] : false);
        $password = trim(isset($_POST['contraseña']) ? $_POST['contraseña'] : false);
        $creationDate = date("d/m/y");

        if ($name && $email && $password && $creationDate){
            $user = new UserModel();
            $user->setName($name);
            $user->setEmail($email);
            $user->setPassword($password);
            $user->setCreationDate($creationDate);

            $signin = $user->registerUser();
            if($signin == true){
                ?>
                    <script>
                        window.location.href = "../views/log_in.php";
                        alert("Registro exitoso!");
                    </script>
                <?php
            }else{
                ?>
                    <script>
                        window.location.href = "../views/sign_in.php";
                        alert("El usuario o correo ingresado ya existe.");
                    </script>
                <?php
            }
        }
    }
?>