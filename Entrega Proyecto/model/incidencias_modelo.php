<?php
//Clase con todo lo que tenga que ver con las Incidencias
class Incidencia_modelo{  
    
    private $db;
    private $incidencia;    
    
    //Contructor de Incidencia_modelo
    public function __construct(){
        $this->db=Conectar::conexion();
        $this->incidencia=array();  
    }
    public function getIncidencia($id){
        $consulta=$this->db->query("SELECT * FROM incidencias where id='$id';");
        while($filas=$consulta->fetch_assoc()){
            $this->incidencia[]=$filas;
        }
        return $this->incidencia;
    }
    //Funcion para obtener todos los datos sobre la tabla de incidencias
   public function getIncidencias(){
        $consulta=$this->db->query("SELECT * FROM incidencias;");
        while($filas=$consulta->fetch_assoc()){
            $this->incidencia[]=$filas;
        }
        return $this->incidencia;
    }
    
    //Funcion para obtener todos los datos sobre la tabla de incidencias segun el usuario que esté conectado
    public function getIncidenciass($user){
        $consulta=$this->db->query("SELECT * FROM incidencias where Usuario = '$user'");
        while($filas=$consulta->fetch_assoc()){
            $this->incidencia[]=$filas;
        }
        return $this->incidencia;
    }
    
    //Funcion que inserta una Incidencia segun el usuario que le des y los datos de la incidencia
    public function InsertarIncidencia($con,$arraydatos,$user){
      
        $titulo = $arraydatos[0];
        $lugar = $arraydatos[1];
        $fecha = date('Y-m-d');
        $pclaves = "$arraydatos[2]";
        $usr = $user;
        $estado = "pendiente";
        $descripcion = $arraydatos[3];
        $imagen = $arraydatos[4];
        
        $prep= mysqli_prepare($con,"INSERT INTO incidencias (Titulo,Lugar,Fecha,PClaves,Usuario,Estado,Descripcion,Imagenes) VALUES (?,?,?,?,?,?,?,?)"); 
        
        mysqli_stmt_bind_param($prep,"ssssssss",$titulo,$lugar,$fecha,$pclaves,$usr,$estado,$descripcion,$imagen);
        
        
        $result = mysqli_stmt_execute($prep);
        
        
        $result2 = mysqli_stmt_close($prep);
        
        $log = "INSERT INTO log (tiempo, contenido) values (NOW(),'El usuario: $user ha metido una nueva incidencia.')";
            mysqli_query($con,$log);
    }
    
    //Funcion que actualiza la foto de perfil del usuario en cuestion
    public function setIncidencia($con,$datosincidencia,$user){
        $prep= mysqli_prepare($con,"UPDATE incidencias SET Titulo = ?,  Lugar = ?, PClaves = ?, Estado = ?, Descripcion = ? WHERE id = ?");
        $titulo = $datosincidencia[0];
        $lugar = $datosincidencia[1];
        $pclaves = $datosincidencia[2];
        $estado = $datosincidencia[3];
        $descripcion = $datosincidencia[4];
        
        $usr= $user;
        
        mysqli_stmt_bind_param($prep,'ssssss',$titulo,$lugar,$pclaves,$estado,$descripcion,$usr);
       
        $result = mysqli_stmt_execute($prep);
        mysqli_stmt_close($prep);
        
        //Para meter en el log      
        $log = "INSERT INTO log (tiempo, contenido) values (NOW(),'Actualizacion de la incidencia con id: $usr')";
            mysqli_query($con,$log);
        
    }
    
    
}
    
?>