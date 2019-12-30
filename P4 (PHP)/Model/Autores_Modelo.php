<?php

class Autores_modelo{  
    
    private $db;
    private $autores;
    
    public function __construct(){
        $this->db=Conectar::conexion();
        $this->autores=array();
        
    }
    
     public function getAutores(){
        $consulta=$this->db->query("SELECT Nombre FROM autores order by numero_libros Desc limit 3;");
        //$consulta=$this->db->query("SELECT Nombre FROM autores;");
        while($filas=$consulta->fetch_assoc()){
            $this->autores[]=$filas;
        }
        return $this->autores;
    }
}
    
?>