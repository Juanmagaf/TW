<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Conexión</title>
        <link rel="stylesheet" type="text/css" href="Estilo/Css.css" />
    </head>
    <body>
        <?php
            Class Conectar{
                
                public static function conexion(){
                    
                    $username = "normal";
                    $password = "password";
                    $servername = "localhost";
                    $dbname = "libreria";
                    
                    //echo $_SESSION["username"];
                    //echo $GLOBALS["password"];

                    // Jefe
                    if($_SESSION["username"] == "jefe" and $GLOBALS["password"] == "jefe"){
                        $conn = new mysqli($servername, "jefe", "jefe", $dbname);
                        //mysqli_change_user ($conn, "editor_jefe", "password", "libreria");
                        mysqli_set_charset($conn,"utf8");

                        
                        /*if ($conn->connect_error) {
                            die("Connection failed: ");// . $conn->connect_error);
                        } else{
                            //echo "Connected successfully";
                        }*/
                        
                    }else{//Normal
                        $conn = new mysqli($servername, $username, $password, $dbname);
                        mysqli_set_charset($conn,"utf8");
                        //die("No se pudo conectar a la base de datos.");
                        
                    }
                    return $conn;
                }
            }
        
            
        ?>
        
    </body>
</html>