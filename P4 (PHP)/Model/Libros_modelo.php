<?php

class Libro_modelo{  
    
    private $db;
    private $libros;
    private $titulo;
    
    public function __construct(){
        $this->db=Conectar::conexion();
        $this->libros=array();  
        //$sec =$_GET['seccion'];
        //$username = $_SESSION["username"];
        //echo $sec;
    }
    
    public function getLibros(){
        $consulta=$this->db->query("SELECT * FROM libros;");
        while($filas=$consulta->fetch_assoc()){
            $this->libros[]=$filas;
        }
        return $this->libros;
    }
    public function getLibro($id){
        $consulta=$this->db->query("SELECT * FROM libros WHERE Índice = '$id'");
        while($filas=$consulta->fetch_assoc()){
            $this->libros[]=$filas;
        }
        return $this->libros;
    }
    
    public function getLibrosBusqueda($pal,$gen){
        $consulta=$this->db->query("SELECT * FROM libros WHERE Título Like '%$pal%' OR Genero = '$gen';");
        while($filas=$consulta->fetch_assoc()){
            $this->libros[]=$filas;
        }
        return $this->libros;
    }
    public function anadirLibro($id,$tit,$au,$ed,$din,$img,$gen,$anio,$des){
    
        //Añadir libro, cuidado con los literales de tipo: 'text'
        $consulta=$this->db->query("INSERT INTO libros (Índice,Título,Autor,Editorial,Dinero,Imagen,Genero,Año,Descripción) VALUES (".$id.",'".$tit."','".$au."','".$ed."',".$din.",'".$img."','".$gen."',".$anio.",'".$des."');");
        //$consulta=$this->db->query("INSERT INTO libros (Índice,Título,Autor,Editorial,Dinero,Imagen,Genero,Año,Descripción) VALUES (44,titulo,pepe,hhh,5,6,fic,8,hola);");
        if(!$consulta){
            return false;
        }
        return true;
    }
    
    public function actualizarLibro($id,$tit,$au,$ed,$din,$img,$gen,$anio,$des){
        /*echo "Id: ";
        echo $id;
        echo "Titulo: ";
        echo $tit;
        echo "Autor: ";
            echo $au;
        echo "Editorial: ";
            echo $ed;
        echo "Dinero: ";
            echo $din;
        echo "Imagen: ";
            echo $img;
        echo "Genero: ";
            echo $gen;
        echo "Año: ";
            echo $anio;
        echo "Descripcion: ";
            echo $des;*/

            
        //Añadir libro, cuidado con los literales de tipo: 'text'
        $consulta=$this->db->query("UPDATE libros SET Título = '".$tit."',Autor ='".$au."',Editorial ='".$ed."',Dinero =".$din." ,Imagen = '".$img."',Genero ='".$gen."',Año = ".$anio.",Descripción = '".$des."' WHERE Índice = ".$id.";");
        //UPDATE libros SET Título = '".$tit."',Autor = '".$au."',Editorial = '".$ed."',Dinero =".$din." ,Imagen = '".$img."' ,Genero = '".$gen."',Año = ".$anio.",Descripción =  '".$des." WHERE LIKE Índice = '$id';
        
        //$consulta=$this->db->query(UPDATE libros SET Título = 'hola',Autor = 'sihdfvasi',Editorial = 'CAMBIO',Dinero ="1234536" ,Imagen = 'imagen' ,Genero = 'cin',Año = "1234",Descripción =  'descripcion' where Índice = 2;);
        
        if(!$consulta){
            return false;
        }
        return true;
    }
    public function borrarLibro($ind){
        $consulta=$this->db->query("DELETE FROM libros WHERE Índice='$ind';");
        if(!$consulta){
            return false;
        }
        return true;
    }
    
}
    
?>