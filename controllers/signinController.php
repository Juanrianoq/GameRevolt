<?php

    include_once("../config/db.php");

    $error = "";
    $success = "";

    if(isset($_POST['acceder'])){
        if(
            strlen($_POST['alias']) >= 1 &&
            strlen($_POST['correo']) >= 1 &&
            strlen($_POST['contraseña']) >= 1
        ){

            $alias = trim($_POST['alias']);
            $correo = trim($_POST['correo']);
            $contraseña = trim($_POST['contraseña']);
            $fecha_actual = date("d/m/y");

            date_default_timezone_set('America/Bogota');
            $fecha_actual = date("Y-m-d H:i:s");

            //se verifica si el alias ya existe
            $verificacion_alias = "SELECT alias FROM registro WHERE alias = '$alias'";
            $alias_resultado = mysqli_query($conex, $verificacion_alias);

            $verificacion_correo = "SELECT correo FROM registro WHERE correo = '$correo'";
            $correo_resultado = mysqli_query($conex, $verificacion_correo);     

            if(mysqli_num_rows($alias_resultado) > 0 && mysqli_num_rows($correo_resultado) > 0){
                //si el alias y el correo ya existe muesta mensaje de error
                $error = "Ya tienes una cuenta, inicia sesión.";
            }else{
                if(mysqli_num_rows($alias_resultado) > 0){
                //si el alias ya existe muesta mensaje de error
                $error = "El alias ya existe. Por favor, elige uno diferente.";
                }else{
                if(mysqli_num_rows($correo_resultado) > 0){
                    //si el correo ya existe muesta mensaje de error
                    $error = "El correo ya existe. Por favor, elige uno diferente.";
                    
                }else{
                    //si el correo no existe realiza la insercion
                    $consulta = "INSERT INTO registro(alias, correo, contraseña, fecha)
                                VALUES('$alias', '$correo', '$contraseña', '$fecha_actual')";
        
                    $resultado = mysqli_query($conex, $consulta);
        
                    if($resultado){
                        $success = "Tu registro se ha completado.";
                    }else{
                        $error = "Ocurrió un error. Inténtalo de nuevo.";
                    }
                }
                }
            }

            
    }else{
        $error = "Llena todos los campos.";
    }

    }

?>