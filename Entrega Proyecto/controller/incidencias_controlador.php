<?php

    require_once("model/incidencias_modelo.php");

    
    //Creacion del Objeto Incidencia
    $inc = new Incidencia_modelo();

    //Segun $_GET['seccion'] definida anteriormente nos vamos a una vista u otra
    if($_GET['seccion']=='inicio'){
        //echo $_SESSION["rol"];
        $datosinc = $inc->getIncidencias();
        require_once ("view/inicio.php");
    }
    //Entrar aqui si solo eres colaborador o administrador
    if($_SESSION["rol"] == 'colaborador' or $_SESSION["rol"]== 'administrador'){
        if($_GET['seccion']=='incidencia'){
            require_once("view/nueva_incidencia.php");
        }
        if($_GET['seccion']=='añadir_incidencia'){
            $nombreArchivo = $_FILES['archivo']['name'];
            $nombreTmp = $_FILES['archivo']['tmp_name'];
            $datosinc = $inc->getIncidencias();
            $ext = substr($nombreArchivo,strrpos($nombreArchivo,'.'));
            
            $nombre_a = $_SESSION["datos"][3].date("YmdHis");
                
            if(move_uploaded_file($nombreTmp,'imagenes/'.$nombre_a.$ext))
                $ruta = "imagenes/".$nombre_a.$ext;
           
            $datos_incidencia = array($_POST["titulo"],$_POST["lugar"],$_POST["pclave"],$_POST["descripción"],$ruta);
            
            $usuario= $_SESSION["datos"][1];
            
            $anadiri = $inc->InsertarIncidencia($con,$datos_incidencia,$usuario);

            require_once("view/añadir_incidencia.php");
        }
        if($_GET['seccion']=='propias'){
            $datosinc = $inc->getIncidenciass($_SESSION["datos"][1]);
            require_once ("view/propias.php");
        }
    }
    if($_GET['seccion']=='editar_incidencia'){
            //$indice = $_GET["indice"];
            $datosincidencia = $inc->getIncidencia($_GET["indice"]);
            require_once ("view/editar_incidencia.php");
        }
    
    if($_GET['seccion']=='editar_incidencia2'){
            //$indice = $_POST["indice"];
        
            $datosincidencia = $inc->getIncidencia($_POST["indice"]);
       // var_dump($datosincidencia);
            require_once ("view/editar_incidencia.php");
        }

    if($_GET['seccion']=='incidencia_modificada'){
        $datos_incidencia = array($_POST["titulo"],$_POST["lugar"],$_POST["pclave"],$_POST["estado"],$_POST["descripción"]);
       // echo $_POST["indice"];
        //var_dump($datos_incidencia);
         $inc ->setIncidencia($con,$datos_incidencia,$_POST["indice"]);
        require_once ("view/incidencia_modificada.php");
    }
?>