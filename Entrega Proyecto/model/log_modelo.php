<?php
    //Clase con todo lo que tenga que ver con el Log de la Base de datos
    class Log_modelo{  
    
        private $db;
        private $log;

        //Constructor del Log
        public function __construct(){
            $this->db=Conectar::conexion();
            $this->log=array();  
        }

        //Función que obtiene todos los datos de la tabla de Log
        public function getLog(){
            $consulta=$this->db->query("SELECT * FROM log ORDER BY tiempo DESC;");
            while($filas=$consulta->fetch_assoc()){
                $this->log[]=$filas;
            }
            return $this->log;
        }
        public function sesionFallida($con){
            $log = "INSERT INTO log (tiempo, contenido) values (NOW(),'Fallo de login')";
            mysqli_query($con,$log);


        }
    }
?>