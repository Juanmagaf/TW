<?php

    require_once("model/log_modelo.php");
    
    //Creación del Objeto Log
    $log = new Log_modelo();
    
    //Llamada a función de getLog() para obtener los datos de dicha tabla
    $datoslog = $log->getLog();
    //Llamamos a la vista del Log

    if($_SESSION["rol"] == "administrador")
        require_once ("view/log.php");   

    if(!isset($_SESSION["datos"]) and $_SESSION['rol']=="visitante")
        $log->sesionFallida($con);      
    
    

?>