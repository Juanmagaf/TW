<?php
    // Clase conectar
    class Conectar{
        public static function conexion(){
                   
            $username = "juanmagaf1819";
            $password = "kkulgwAf";
            $servername = "localhost";
            $dbname = "juanmagaf1819";
                    
            //Establece conexción con la BD
            $conn = new mysqli($servername, $username, $password, $dbname);
                       
            //Comprueba si hay algun error con la conexión
            if ($conn->connect_error) {
                 die("Connection failed: ");// . $conn->connect_error);
            }else{
            //  echo "Connected successfully";
                        }
            return $conn;
        }
    }
?>