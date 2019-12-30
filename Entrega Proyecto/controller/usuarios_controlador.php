<?php

    require_once("model/usuarios_modelo.php");
    
    //Nuevo usuario
            if(isset($_POST['nombre_nuevo'])){
                $nombre_nuevo=$_POST['nombre_nuevo'];
            }else{
                
                $nombre_nuevo="";
            }
            //echo $_POST['nombre_nuevo'];
            if(isset($_POST['email_nuevo'])){
                $email_nuevo=filter_var($_POST['email_nuevo'],FILTER_VALIDATE_EMAIL);
            }else{
                $email_nuevo="";
            }
//echo $email_nuevo;
            if(isset($_POST['pass_nueva'])){
                $pass_nueva=filter_var($_POST['pass_nueva'],FILTER_SANITIZE_STRING);
            }else{
                $pass_nueva="";
            }
            if(isset($_POST['telefono'])){
                $telefono=filter_var($_POST['telefono']);
            }else{
                $telefono="";
            }
            if(isset($_POST['cp'])){
                $cp=filter_var($_POST['cp']);
            }else{
                $cp="";
            }
            if(isset($_POST['apellidos'])){
                $apellidos=filter_var($_POST['apellidos']);
            }else{
                $apellidos="";
            }
    //Creación de Objeto Usuario
    $u = new Usuario_modelo();
    //$login = array($email,$pass);
   
    $usuarios = $u->getUsuarios();
    $usuarioe = $u->getUsuario($con,$email);

    //Comprobamos si el email y la contraseña no están vacios, si no lo están verificamos y hacemos el login
    if(isset($_POST['email']) and isset($_POST['pass'])){
        //Guardo el email para posteriormente usarlo en la foto
        $_SESSION['email'] = $email;
        
        $hash = $u->getPass($con,$email);
        //var_dump($hash);
        if(!empty($hash)){
            $clave = $hash[0];
        
        
            if(password_verify($_POST['pass'],$clave)){
                $datosusuario = $u->getDatosUsuario($con,$email,$clave);
                $login = array($email,$hash[0]);
                $_SESSION["datos"] = $datosusuario;
                //ROL
                $rol = $u->getUsuarioRol($con,$login);
                $_SESSION["rol"]=$rol;
            }
        }
    }else if(!isset($_SESSION['rol'])){ //Si no hay correo/contraseña asignamos el rol de visitante.;
        $_SESSION["rol"] = "visitante";
        $_SESSION["datos"] = " ";
        
    }
    //echo $_FILES['archivo_inc']['name'];
    //Parte para subir la imagen a la ruta de imagenes
    if(isset($_POST["botonf"])){
        //El Nombre del archivo será la clave primaria de la base de datos para cada usuario
        $nombreArchivo = $_FILES['archivo']['name'];
        $nombreTmp = $_FILES['archivo']['tmp_name'];
        //obtener extensión del archivo
        $ext = substr($nombreArchivo,strrpos($nombreArchivo,'.'));
       
        //Subir archivo
           
       
        if(move_uploaded_file($nombreTmp,'imagenes/'.$_SESSION["datos"][3].$ext))
            //imagenes/nombre clave primaria
            $ruta = "imagenes/".$_SESSION["datos"][3].$ext;
        if(empty($ruta)){
            $ruta = null;
        }
        //Le paso la ruta y el correo de la sesion actual.
        $rutaemail = array($ruta,$_SESSION["datos"][3]);
            //var_dump($rutaemail);
        //Llamando a la funcion de cambiar la foto en BD
        $u->setFoto($con,$rutaemail);
        
        
    }

    //var_dump($datosusurio);
    if(isset($_POST["cambios_perfil"])){
        //echo "CAMBIANDO PERFIL";
        if(!isset($_POST["rol"])){
            $_POST["rol"] = "colaborador";
        }
         $datosperfil  = array(filter_var($_POST["nombre"],FILTER_SANITIZE_STRING),filter_var($_POST["apellidos"],FILTER_SANITIZE_STRING),$_POST["email"],filter_var($_POST["cp"],FILTER_VALIDATE_INT),filter_var($_POST["telefono"],FILTER_VALIDATE_INT),$_POST["rol"]);
        
        $u ->setPerfil($con,$datosperfil,$usuarioe[3]);


    }
    echo $nombre_nuevo;

    //Añadir usuario a la base de datos
    if(isset($_POST["añadir_usuario"])){
        //echo $_POST["nombre_nuevo"];
        
        $clave = password_hash($_POST['pass_nueva'],PASSWORD_DEFAULT);
       
        $datosperfil  = array(filter_var($_POST["nombre_nuevo"],FILTER_SANITIZE_STRING),filter_var($_POST["apellidos"],FILTER_SANITIZE_STRING),filter_var($_POST["email_nuevo"],FILTER_VALIDATE_EMAIL),filter_var($_POST["cp"],FILTER_VALIDATE_INT),filter_var($_POST["telefono"],FILTER_VALIDATE_INT),$clave,$_POST["rol"]);
        $u ->NuevoPerfil($con,$datosperfil);
    }

    if(isset($_POST["Borrar_Usuario"])){
        $u->BorrarPerfil($con,$email);
    }


    require_once ("main.php");


?>