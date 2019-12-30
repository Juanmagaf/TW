<?php
    session_start();
    echo 'Cerrando sesión  ';
    echo $_SESSION['username'];
    $_SESSION['username'] = "normal";
    echo '...';
    
    echo 'Sesión cerrada. <a href="../index.php?">Volver</a>';
?>