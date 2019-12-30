<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="author" content="Juan Manuel González-Aurioles">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" type="text/css" href="css/Css.css">
    <title>Login</title>
</head>
<!--LOGIN-->
    <main>
        <?php
        if($_SESSION['username'] == 'jefe' and $GLOBALS['password'] == 'jefe'){
            echo'
            <h3> Bienvenido JEFE <h3>
            <a href="index.php?seccion=añadir" class="enlace">Añadir Libro</a>
            <form action="bd/logout.php" method="POST">
                <input type="submit" value="Logout" />       
            </form>';
        }else{
            
            echo'<form action="index.php?seccion=login" method="POST">
                <label>Usuario: <input type="text" name="username" required><br></label>
                <label>Contraseña: <input type="password" name="password" required><br></label>
                <input type="submit" value="Entrar"/>';
                
             /*if($_SESSION["username"] != 'jefe' or $GLOBALS["password"]  != 'jefe')
                echo '<h3>Usuario o contraseña erroneo</h3>';*/
             
            echo '</form>';
        
        }
                
            ?>
    </main>
    
</html>
