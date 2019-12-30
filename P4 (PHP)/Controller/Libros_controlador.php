<?php

require_once("Model/Libros_modelo.php");

$lib = new Libro_Modelo();
$lib2 = new Libro_Modelo();
$datoslibros = $lib->getLibros();


if($_GET['seccion']=='catalogo'){
    require_once("view/Catalogo.php");
}
if($_GET['seccion']=='añadir'){
    require_once("view/Añadir.php");
}

if($_GET['seccion']=='busqueda'){
    require_once("view/Busqueda.php");
}
if($_GET['seccion']=='busquedaon'){
    $datoslibrosb = $lib2->getLibrosBusqueda($palabra,$genero);
    require_once("view/BusquedaLibro.php");
}

if($_GET['seccion']=='añadirLibro'){
    $anadirl=$lib->anadirLibro($id,$titulo,$autor,$editorial,$dinero,$imagen,$genero,$año,$descripción);
    require_once("view/AñadirLibro.php");
}

if($_GET['seccion']=='actualizarLibro'){
    echo $autor;
    $lib->actualizarLibro($id,$titulo,$autor,$editorial,$dinero,$imagen,$genero,$año,$descripción);
    require_once("view/ActualizarLibro.php");
}
if($_GET['seccion']=='borrar'){
    $borrarl=$lib->borrarLibro($indice);
    require_once("view/BorrarLibro.php");
}
if($_GET['seccion']=='comprar'){
    $datoslib=$lib2->getLibro($indice);
    require_once("view/Pedidos.php");
}

if($_GET['seccion']=='editar'){
    $datoslib=$lib2->getLibro($indice);
    require_once("view/Editar.php");
}
?>