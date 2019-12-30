<?php
    include ("backup.php");
    
    //Hay que poner los datos del mysqli
    Guardado("localhost","juanmagaf1819","kkulgwAf","juanmagaf1819");
    $fecha=date("Y-m-d");
    header("Content-disposition: attachment; filename=Copia-Seguridad-".$fecha.".sql");
    header("Content-type: MIME");
    readfile("backups/Copia-Seguridad-".$fecha.".sql");

?>