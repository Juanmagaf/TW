<?php
    if(isset($_REQUEST['seccion'])){
        $seccion=$_GET['seccion'];
    }else{
        $seccion="inicio";
    }
    //Variables del libro
    if(isset($_REQUEST['indice'])){
        $indice=$_GET['indice'];
    }else
        $indice= "";
    if(isset($_POST['id'])){
        $id=$_POST['id'];
    }else
        $id= "";

    if(isset($_POST['titulo'])){ 
        $titulo = $_POST['titulo'];
    }else{
        $titulo = ""; 
    }
    if(isset($_POST['autor'])){ 
        $autor = $_POST['autor'];
    }else{
        $autor = ""; 
    }
    if(isset($_POST['editorial'])){ 
        $editorial = $_POST['editorial'];
    }else{
        $editorial = ""; 
    }
    if(isset($_POST['dinero'])){ 
        $dinero = $_POST['dinero'];
    }else{
        $dinero = ""; 
    }
    if(isset($_POST['imagen'])){ 
        $imagen = $_POST['imagen'];
    }else{
        $imagen = ""; 
    }
    if(isset($_POST['genero'])){ 
        $genero = $_POST['genero'];
    }else{
        $genero = ""; 
    }
    if(isset($_POST['año'])){ 
        $año = $_POST['año'];
    }else{
        $año = ""; 
    }

    if(isset($_POST['descripción'])){ 
        $descripción = $_POST['descripción'];
    }else{
        $descripción = ""; 
    }
    //Variable para buscar aparte de indice
    if(isset($_POST['palabra'])){ 
        $palabra = $_POST['palabra'];
    }else{
        $palabra = ""; 
    }

    
    require 'View/header.php';
    switch($seccion){
        case 'inicio':             
            require("View/Inicio.php");
            break;
        case 'catalogo':
            require("Libros_controlador.php");
            break;
        case 'busqueda':
            require("controller/Libros_controlador.php");
            break;
        case 'busquedaon':
            require("controller/Libros_controlador.php");
            break;
        case 'tiendas':
            require("View/Tiendas.php");
            break;
        case 'login':
            require("View/Login.php");
            break;
        case 'añadir':
            require("controller/Libros_controlador.php");
            break;
        case 'añadirLibro':
            require("controller/Libros_controlador.php");
            break;
        case 'borrar':
            require("controller/Libros_controlador.php");
            break;
        case 'actualizarLibro':
            require("controller/Libros_controlador.php");
            break;
        case 'comprar':
            require("controller/Libros_controlador.php");
            break;
        case 'editar':
            require("controller/Libros_controlador.php");
            break;
        case 'default':
            require("View/Inicio.php");
            break;
    }

    require_once 'Autores_controlador.php';
    require 'View/footer.php';

?>
