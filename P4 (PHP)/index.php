<?php
    //Conexión BD
    session_start();

    require_once 'bd/conexion.php';
                    if(isset($_POST['username'])){ 
                        $_SESSION["username"] = $_POST['username'];
                    }
                   /*else{
                        $_SESSION["username"] = ""; 
                    }*/
                    if(isset($_POST["password"])){ 
                        $GLOBALS["password"] = $_POST['password'];
                    }else{
                        $GLOBALS["password"] = "jefe"; 
                    }
/*echo"sesion:";
echo $_SESSION["username"];
echo "pass:";
echo $GLOBALS["password"];*/
    
    
    echo "<div id=pagina>";
       // require 'View/header.php';
        
        require 'Controller/main.php';
        //include 'View/footer.php';
    echo "</div>";
?>