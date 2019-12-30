<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="author" content="Juan Manuel González-Aurioles">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" type="text/css" href="css/Css.css">

    <title>Añadir libro</title>
</head>
<main>
    <h3>Añadir un libro al catálogo</h3>
    <form action="index.php?seccion=añadirLibro" method="POST">
        <label>Indice: <input type="number" min="0" name="id" required><br></label>
        <label>Título: <input type="text" name="titulo" required ><br></label>
        <label>Autor: <input type="text" name="autor" required><br></label>
        <label>Editorial: <input type="text" name="editorial" required><br></label>
        <label>Descripción: <br></label>
        <label><textarea name="descripción" rows="20" cols= "130" required></textarea><br></label>
        <label>Dinero: <input type="number" min="0" name="dinero" required><br></label>
        <label>Genero: <input type="text" name="genero" required><br></label>
        <label>Imagen: <input type="text" accept="image/*" name="imagen" required><br></label>
        <label>Año: <input type="number" min="0" name="año" required><br></label>
        <input type="submit" value="Añadir"/>
    </form>
</main> 
</html>