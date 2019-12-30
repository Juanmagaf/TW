<!DOCTYPE html>
<html lang="es">
    <div id=pagina>    
        <?php
            //Declaración de variables necesarias para el funcionamiento de la aplicación web
        
            if(isset($_REQUEST['seccion'])){
                $seccion=$_GET['seccion'];
            }else{
                $seccion="inicio";
                $_GET['seccion'] = "inicio";
            }
            
            //Incicendia
            //Id
            if(isset($_POST['id'])){
                $id=$_POST['id'];
            }else{
                $id="";
            }
            //Titulo 
            if(isset($_POST['titulo'])){
                $titulo=filter_var($_POST['titulo'],FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS);
                //echo $titulo;
            }else{
                $titulo="";
            }
            //Lugar
            if(isset($_POST['lugar'])){         $lugar=filter_var($_POST['lugar'],FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS);
            }else{
                $lugar="";
            }
            if(isset($_POST['pclave'])){
                $pclave=$_POST['pclave'];
            }else{
                $pclave="";
            }
            //Descripción
            if(isset($_POST['descripción'])){
                $descripción=filter_var($_POST['descripción'],FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS);
            }else{
                $descripción="";
            }
            if(isset($_FILES['archivo']['name'])){
                $archivo=$_FILES['archivo']['name'];
            }else{
                $archivo="";
            }
            
        
            //Mostramos header + nav
            require ("view/header.php");

            //Según en que sección estemos, iremos al controlador/vista correspondiente.
            switch($seccion){
                case 'inicio':
                    require ("incidencias_controlador.php");
                    break;
                case 'incidencia':
                    if($_SESSION["rol"] == "administrador" or $_SESSION["rol"] == "colaborador"){
                    require_once("incidencias_controlador.php");
                    }else{
                        echo "No eres colaborador/administrador para ver tener acceso a esta vista";
                    }
                    break;
                case 'añadir_incidencia':
                    if($_SESSION["rol"] == "administrador" or $_SESSION["rol"] == "colaborador"){
                    require_once("incidencias_controlador.php");
                    }else{
                        echo "No eres colaborador/administrador para ver tener acceso a esta vista";
                    }
                    break;
                case 'propias':
                    if($_SESSION["rol"] == "administrador" or $_SESSION["rol"] == "colaborador"){
                    require_once("incidencias_controlador.php");
                    }else{
                        echo "No eres colaborador/administrador para ver tener acceso a esta vista";
                    }
                    break;
                    //A partir de aqui se comprueba previanmente si eres colaborador o administrador para evitar a los hackers por la linea de web.
                case 'editar':
                    if($_SESSION["rol"] == "administrador" or $_SESSION["rol"] == "colaborador"){
                        require_once("view/editar_perfil.php");
                    }else{
                        echo "No eres colaborador/administrador para ver tener acceso a esta vista";
                    }
                    break;
                case 'editarp':
                    if($_SESSION["rol"] == "administrador" or $_SESSION["rol"] == "colaborador"){
                        require_once("view/editar_perfiles.php");
                    }else{
                        echo "No eres colaborador/administrador para ver tener acceso a esta vista";
                    }
                    break;
                case 'log':
                    if($_SESSION["rol"] == "administrador"){
                        require("log_controlador.php");
                    }else{
                        echo "No eres administrador para ver tener acceso a esta vista";
                    }
                    break;
                case 'bbdd':
                    if($_SESSION["rol"] == "administrador"){
                        require_once("view/gestion.php");
                    }else{
                        echo "No eres administrador para ver tener acceso a esta vista";
                    }
                    break;
                
                case 'usuarios':
                    if($_SESSION["rol"] == "administrador"){
                        require_once("view/gestion_usuarios.php");
                         //require_once("controller/usuarios_controlador.php");
                    }else{
                        echo "No eres administrador para ver tener acceso a esta vista";
                    }
                    break;
                case 'nuevo_usuario':
                    if($_SESSION["rol"] == "administrador"){
                        require_once("view/nuevo_usuario.php");
                    }else{
                        echo "No eres administrador para ver tener acceso a esta vista";
                    }
                    break;
                case 'añadir_usuario':
                    if($_SESSION["rol"] == "administrador"){
                        require_once("view/añadir_perfil.php");
                    }else{
                        echo "No eres administrador para ver tener acceso a esta vista";
                    }
                    break;
                case 'añadir_perfil':
                    if($_SESSION["rol"] == "administrador"){
                        require_once("view/añadir_perfil.php");
                    }else{
                        echo "No eres administrador para ver tener acceso a esta vista";
                    }
                    break;
                case 'perfil_actualizado':
                    if($_SESSION["rol"] == "administrador" or $_SESSION["rol"] == "colaborador"){
                        require_once("view/perfil_actualizado.php");
                    }else{
                        echo "No eres colaborador/administrador para ver tener acceso a esta vista";
                    }
                    break; 
                case 'borraruser':
                    if($_SESSION["rol"] == "administrador"){
                        require_once("view/borrar_usuario.php");
                    }else{
                        echo "No eres administrador para ver tener acceso a esta vista";
                    }
                    break; 
                case 'borrado':
                    if($_SESSION["rol"] == "administrador"){
                        require_once("view/usuario_borrado.php");
                       
                    }else{
                        echo "No eres administrador para ver tener acceso a esta vista";
                    }
                    break; 
                case 'editar_incidencia':
                    if($_SESSION["rol"] == "administrador"){
                        
                        require_once("controller/incidencias_controlador.php");
                       
                    }else{
                        echo "No eres colaborador/administrador para ver tener acceso a esta vista";
                    }
                    break;
                case 'editar_incidencia2':
                    if($_SESSION["rol"] == "administrador" or $_SESSION["rol"] == "colaborador"){
                        
                        require_once("controller/incidencias_controlador.php");
                       
                    }else{
                        echo "No eres colaborador/administrador para ver tener acceso a esta vista";
                    }
                    break;
                    
                case 'incidencia_modificada':
                    if($_SESSION["rol"] == "administrador" or $_SESSION["rol"] == "colaborador"){
                        
                        require_once("controller/incidencias_controlador.php");
                       
                    }else{
                        echo "No eres colaborador/administrador para ver tener acceso a esta vista";
                    }
                    break;
                    
            }
            //Mostramos aside + footer
            require ("view/aside.php");
            require ("view/footer.php");
        ?>
    </div>
</html>