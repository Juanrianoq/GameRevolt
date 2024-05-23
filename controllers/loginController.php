<?php

    include_once("../config/db.php");

    $error = "";

    if(isset($_POST['acceder'])){
        $correo = $_POST['correo'];
        $contraseña = $_POST['contraseña'];
        
        session_start();
        
        $_SESSION['usuario'] = $correo;
        
        $consulta = "SELECT * FROM registro WHERE correo = '$correo' AND contraseña = '$contraseña'";
        
        $resultado = mysqli_query($conex, $consulta);
        $filas = mysqli_num_rows($resultado);
        
        if($filas>0){
            //inicia sesion correctamente y redirige a noticias
            header("location: index.php");
        }else{
            //datos incorrectos
            $error = "Acceso inválido. Por favor, inténtalo de nuevo.";
        }
        
        mysqli_free_result($resultado);
        mysqli_close($conex);

    }

?>
