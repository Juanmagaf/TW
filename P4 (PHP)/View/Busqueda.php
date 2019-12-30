<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="author" content="Juan Manuel González-Aurioles">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" type="text/css" href="css/Css.css">
    <title>Página Búsqueda Libreria</title>
</head>
<body>
       
    <main>
       <h2>Búsqueda en el catálogo: </h2>
            <form action="index.php?seccion=busquedaon" method="POST">
                <!--<label>Autor: <input type="text" name="autor"><br></label>
                <label>Titulo: <input type="text" name="titulo"><br></label>
                <label>ISBN: <input type="text" name="correo"><br></label>

                <label>Precio
                entre <input type="text" name="entre" size="5">
                y <input type="text" name="entre" size="5"><br></label>-->
                <label>Palabra de búsqueda: <input type="text" name="palabra"><br></label>
                <label>Género: 
                    <select name="genero">
                        <option>-eliga su género-</option>
                        <option>Ciencia Ficción</option>
                        <option>Romance</option>
                        <option>Terror</option>
                        <option>Infantil</option>
                        <option>Policiaca</option>
                    </select>
                    <br>
                </label>
                <label><input type="submit" value="Buscar"/></label>
                <!--</label>
                
                <label>Encuadernación: 
                <input type="radio" name="encuadernacion" value="Dura"> Tapa dura   
                <input type="radio" name="encuadernacion" value="Blanda"> Tapa blanda
                <input type="radio" name="encuadernacion" value="Cualquiera" checked> Cualquiera
                <br>
                <input type="submit" value="Buscar"/>
                </label>    -->
            </form>
    </main>

    <?php
        //require("Lateral.php");
    ?> 

</body>
</html>