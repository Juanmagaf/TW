<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Juan Manuel González-Aurioles">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" type="text/css" href="css/Css.css">

    <title>Lateral</title>
</head>
<!-- Barra Lateral -->
  <aside>
        <!--<h3>Más vendidos</h3>
        <ul>
            <li>El quijote</li>
            <li>Ulises</li>
            <li>Arguiñano</li>
        </ul>-->
   <?php 
      
       echo '<h2>Los tres Autores más populares</h3>';
        foreach($datosautores as $autores){ 
            echo  '<h3>'.$autores["Nombre"].'</h3>';
        }  
        /*echo '<h3>Más populares</h3>
        <ul>
            <li>Charles Dickens</li>
            <li>Julio Verne</li>
            <li>Egdar Allan Poe</li>

        </ul>';*/
        ?>
    </aside> 
</html>