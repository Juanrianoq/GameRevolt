<?php

    class Database{
        public static function connect(){
            $conexion = new mysqli("localhost", "root", "", "gamerevolt");
            $conexion -> query("SET NAMES 'utf8'");
            
            return $conexion;
        }
    }
    
?>