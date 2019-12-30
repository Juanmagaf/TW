<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="author" content="Juan Manuel González-Aurioles">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" type="text/css" href="css/Css.css">

    <title>Nav</title>
</head>
   <!-- Barra de navegación -->
    <nav>
       <?php 
        //echo $_SESSION["username"];
        //echo $GLOBALS["password"];
        if($_SESSION["username"] == 'jefe' and $GLOBALS["password"] == 'jefe'){
            echo'<ul id="barra_nav">
            <li><a href="index.php?seccion=inicio">Inicio</a></li>
            <li><a href="index.php?seccion=catalogo".>Catálogo</a></li>
            <li><a href="index.php?seccion=busqueda">Búsqueda</a></li>
            <li><a href="index.php?seccion=tiendas">Tiendas</a></li>
            <li><a href="index.php?seccion=login">Bienvenido '. $_SESSION['username'].'</a></li>
        </ul>';
        }else{
        
        echo'<ul id="barra_nav">
            <li><a href="index.php?seccion=inicio">Inicio</a></li>
            <li><a href="index.php?seccion=catalogo".>Catálogo</a></li>
            <li><a href="index.php?seccion=busqueda">Búsqueda</a></li>
            <li><a href="index.php?seccion=tiendas">Tiendas</a></li>
            <li><a href="index.php?seccion=login">Login</a></li>
        </ul>';
        }
        ?>
    </nav>
</html>
