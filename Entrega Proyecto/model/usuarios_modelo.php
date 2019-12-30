<?php
//Clase con todo lo que tenga que ver con los Usuarios
class Usuario_modelo{  
    
    private $db;
    private $usuario;
    
    //Contructor de Usuario_modelo
    public function __construct(){
        $this->db=Conectar::conexion();
        $this->usuario=array(); 
    }
    public function getUsuarios(){
        $consulta=$this->db->query("SELECT * FROM usuarios;");
        while($filas=$consulta->fetch_assoc()){
            $this->usuario[]=$filas;
        }
        return $this->usuario;
    }
    public function getDatosUsuario($db,$email,$pass){
        
        $prep= mysqli_prepare($db,"SELECT * FROM usuarios where email = ? and pass = ?;");
        $e = $email;
        $p = $pass;
        
        $usuario = array();
        mysqli_stmt_bind_param($prep,"ss",$e,$p);
        mysqli_stmt_execute($prep);
        
        
        $res = mysqli_stmt_bind_result($prep,$id,$nombre,$apellidos,$email,$postal,$tel,$pass,$foto,$rol);
        
        while(mysqli_stmt_fetch($prep)){            
            $usuario = array($id,$nombre,$apellidos,$email,$postal,$tel,$pass,$foto,$rol);
        }
        mysqli_stmt_close($prep);
        
        if($nombre == ""){
            //echo "ERROR";
            $log = "INSERT INTO log (tiempo, contenido) values (NOW(),'Error de identificacion')";
            mysqli_query($db,$log);
        }
        return $usuario;
    }
    //Get usuario con solo email
    public function getUsuario($db,$email){
        
        $prep= mysqli_prepare($db,"SELECT * FROM usuarios where email = ?;");
        $e = $email;
        
        $usuario = array();
        mysqli_stmt_bind_param($prep,"s",$e);
        mysqli_stmt_execute($prep);
        
        
        $res = mysqli_stmt_bind_result($prep,$id,$nombre,$apellidos,$email,$postal,$tel,$pass,$foto,$rol);
        
        while(mysqli_stmt_fetch($prep)){            
            $usuario = array($id,$nombre,$apellidos,$email,$postal,$tel,$pass,$foto,$rol);
        }
        mysqli_stmt_close($prep);
       
        return $usuario;
    }
    
    public function getPass($db,$email){
        
        $prep= mysqli_prepare($db,"SELECT pass FROM usuarios where email = ?;");
        $e = $email;
        
        mysqli_stmt_bind_param($prep,"s",$e);
        mysqli_stmt_execute($prep);
        
        $usuario = array();
        $res = mysqli_stmt_bind_result($prep,$pass);
        
        while(mysqli_stmt_fetch($prep)){
            $usuario = array($pass);
        }
        mysqli_stmt_close($prep);
        return $usuario;
    }
    
    public function getUsuarioRol($db,$login){
        $prep= mysqli_prepare($db,"SELECT ROL FROM usuarios where email = ? and pass = ?");
        //SELECT ROL FROM usuarios where email = 'b' and pass = 'a'
        $email = $login[0];
        $pass = $login[1];
        mysqli_stmt_bind_param($prep,"ss",$email,$pass);
        mysqli_stmt_execute($prep);
        
        mysqli_stmt_bind_result($prep,$rol);
        
        while(mysqli_stmt_fetch($prep)){}
        
        mysqli_stmt_close($prep);
        $nombresql = $this->db->query("SELECT nombre FROM usuarios where email ='$email'");
        
       
        //Nombre a null por si se pone uno que no existe en la base de datos
        $nombre = "";
        while($filas=$nombresql->fetch_assoc()){
            $this->usuario[]=$filas;
            $user = $this->usuario[0];
            $nombre = $user["nombre"];
            //echo $nombre;
        }
        
       //Para meter en el log
        
           $log = "INSERT INTO log (tiempo, contenido) values (NOW(),'Identificacion de usuario: $nombre')";
           mysqli_query($db,$log);
        
       if (mysqli_query($db, $log)) {
            //echo "Añado información al Log";
        }else
            echo"Fallo añadir información al Log:" .$db->error;
        return $rol;
    }
    
    
    
    //Funcion que actualiza la foto de perfil del usuario en cuestion
    public function setFoto($con,$rutaemail){
        $prep= mysqli_prepare($con,"UPDATE usuarios SET foto =? WHERE email =?");

        $f = $rutaemail[0];
        $correo = $rutaemail[1];
        //echo $f;
        mysqli_stmt_bind_param($prep,'ss',$f,$correo);
        
        $result = mysqli_stmt_execute($prep);
        
        
        $hola = mysqli_stmt_close($prep);
        
        //Para meter en el log
        $log = "INSERT INTO log (tiempo, contenido) values (NOW(),'El usuario: ".$_SESSION["datos"][1]." ha cambiado su foto de perfil.')";
        
        //setcookie("Foto",$_SESSION["datos"][1], time()-100);
            mysqli_query($con,$log);
        
        
    }
    public function setPerfil($con,$datosperfil,$user){
        $prep= mysqli_prepare($con,"UPDATE usuarios SET nombre = ?,  apellidos = ?, email = ?, postal = ?, telefono = ?, rol = ? WHERE email = ?");

        $nombre = $datosperfil[0];
        $apellidos = $datosperfil[1];
        $email = $datosperfil[2];
        $postal = $datosperfil[3];
        $telefono = $datosperfil[4];
        //$pass = $datosperfil[5];
        $rol = $datosperfil[5];
        $usr= $user;
        
        mysqli_stmt_bind_param($prep,'sssiiss',$nombre,$apellidos,$email,$postal,$telefono,$rol,$usr);
        
        $result = mysqli_stmt_execute($prep);
        
        mysqli_stmt_close($prep);
        
        //Para meter en el log      
        $log = "INSERT INTO log (tiempo, contenido) values (NOW(),'Actualizacion del perfil: $nombre')";
            mysqli_query($con,$log);
        
    }
    
    public function NuevoPerfil($con,$arraydatos){
        //var_dump($arraydatos);
        $nombre = $arraydatos[0];
        $apellidos = $arraydatos[1];
        $email = $arraydatos[2];
        $postal = $arraydatos[3];
        $telefono = $arraydatos[4];
        $pass = $arraydatos[5];
        $rol = $arraydatos[6];

        
        $prep= mysqli_prepare($con,"INSERT INTO usuarios (nombre,apellidos,email,postal,telefono,pass,rol) VALUES (?,?,?,?,?,?,?)"); 
        
      
        
        mysqli_stmt_bind_param($prep,"sssssss",$nombre,$apellidos,$email,$postal,$telefono,$pass,$rol);
        
        mysqli_stmt_execute($prep);
        
        mysqli_stmt_close($prep);
        
        $log = "INSERT INTO log (tiempo, contenido) values (NOW(),'Se ha creado un nuevo perfil: $nombre')";
            mysqli_query($con,$log);
    }
    
    //Borrar usuario
    public function BorrarPerfil($db,$email){
        $borrar = "DELETE FROM `usuarios` WHERE email='$email'";
        //var_dump( mysqli_query($db,$borrar));
            mysqli_query($db,$borrar);
        
        $log = "INSERT INTO log (tiempo, contenido) values (NOW(),'El usuario $email ha sido borrado')";
            mysqli_query($db,$log);
        
    }
}
    
?>