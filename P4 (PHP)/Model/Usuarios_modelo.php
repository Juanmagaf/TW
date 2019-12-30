<?php
require("../bd/conexion.php");
class Usuario_modelo{  
    
    private $db;
    private $usuarios;
    
    public function __construct(){
        $this->db=Conectar::conexion();
        $this->usuarios=array();
        
    }
    
     /*public function getUsuarios(){
        $consulta=$this->db->query("SELECT * FROM usuarios;");
        while($filas=$consulta->fetch_assoc()){
            $this->usuarios[]=$filas;
        }
        return $this->usuarios;
    }*/

    
}
    
?>