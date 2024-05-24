<?php

    include_once("../config/db.php");
    require '../models/userModel.php';
    session_start();

    if(isset($_POST['ingresar'])){
        $email = isset($_POST['correo']) ? $_POST['correo'] : false;
        $password = isset($_POST['contraseña']) ? $_POST['contraseña'] : false;

        if ($email && $password){
            $user = new UserModel();
            $user->setEmail($email);
            $user->setPassword($password);

            $login = $user->loginUser();
            if($login == true){
                header("location: ../views/index.php");
                
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;
            }else{
                ?>
                    <script>
                        window.location.href = "../views/log_in.php";
                        alert("El correo o la contraseña ingresada no son validos.");
                    </script>
                <?php
            }
        }
    }

?>
