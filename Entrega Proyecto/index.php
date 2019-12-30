<?php
    //Conexion BD
    session_start();
    require_once ("bd/conexion.php");   
    
    //Variable con = conexión a la base de datos par alo que sea necesario posteriormente
    $con = Conectar::conexion();

    if(isset($_POST['logout'])){
        session_destroy();
        $_SESSION['rol'] = "visitante";
        session_start();
    }
    // Variables para el login de usuario
    if(isset($_POST['email'])){ 
        $email = $_POST['email'];
    }else{
        $email = ""; 
        $_POST['email'] = "nadie";
    }

    if(isset($_POST['pass'])){ 
        $pass = $_POST['pass'];
    }else{
        $pass = ""; 
    }
    require ("controller/usuarios_controlador.php");
    
?>