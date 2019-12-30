<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="author" content="Juan Manuel González-Aurioles">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" type="text/css" href="css/Css.css">
    <title>Página Pedidos Libreria</title>
</head>
<main>
        <!-- Contenido principal -->
        
        <form action="index.php?seccion=actualizarLibro" method="POST">
        <?php
        foreach($datoslib as $libro) { 
            echo'<h3>Editando el libro con título: '.$libro["Título"].' </h3>
                <label>Índice: <input type="number" name="id" min=0 value = '.$libro["Índice"].'><br></label>
                <label>Título: <textarea name="Descripcion" rows="1" cols="50"> '.$libro["Título"].'</textarea><br></label>
                <label>Imagen: <input type="file" name="imagen" value = '.$libro["Imagen"].'><br></label>
                
                <label>Autor: <input type="text" name="autor" value = '.$libro["Autor"].'><br></label>
                
                <label>Editorial: <input type="text" name="titulo" value = '.$libro["Editorial"].'><br></label>
                
                <label>Año: <input type="text" name="año" value = '.$libro["Año"].'><br></label>
                <label>Descripcion:</label><label><textarea name="descripción" rows="20" cols="130"> '.$libro["Descripción"].'</textarea><br></label>
                
                <label>Dinero: <input type="text" name="dinero" value = '.$libro["Dinero"].'><br></label>';
        }
    ?>
    
    <input type="submit" value="Editar"/>
    </form>
    <!-- Barra Lateral -->
    <?php
        //require("Lateral.php");
    ?>

</main>
</html>