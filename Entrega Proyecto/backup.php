<?php
    //Funcion que realiza una copia de seguridad de las tablas
    //Aqui $tablas = '*' se puede especificar la tabla en concreto que queremos guardar * = todas
    function Guardado($host,$usuario,$contrasena,$nombre,$tablas = '*')
    {
       $return='';
       $link = new mysqli($host,$usuario,$contrasena,$nombre);

       //Obtencion de todas la tablas
       if($tablas == '*'){
          $tablas = array();
          $res = $link->query('SHOW TABLES');
          while($fila = mysqli_fetch_row($res))
          {
             $tablas[] = $fila[0];
          }
       }else{
           if(!is_array($tablas)){
               $tablas = explode(',',$tablas);
           }
       }
        
       //Para cada tabla
       foreach($tablas as $tabla){
          $res = $link->query('SELECT * FROM '.$tabla);
          $n_celdas = mysqli_num_fields($res);
          $return.= 'DROP TABLE '.$tabla.';';
          $fila2 = mysqli_fetch_row($link->query('SHOW CREATE TABLE '.$tabla));
          $return.= "\n\n".$fila2[1].";\n\n";

           for ($i = 0; $i < $n_celdas; $i++){
            while($fila = mysqli_fetch_row($res)){
                $return.= 'INSERT INTO '.$tabla.' VALUES(';
                for($j=0; $j<$n_celdas; $j++) {
                   $fila[$j] = addslashes($fila[$j]);
                   $fila[$j] = preg_replace("/\n/","\\n",$fila[$j]);
                   if (isset($fila[$j])) { $return.= '"'.$fila[$j].'"' ; } else { $return.= '""'; }
                   if ($j<($n_celdas-1)) { $return.= ','; }
                }
                $return.= ");\n";
             }
          }
          $return.="\n\n\n";
       }
        
       $fecha=date("Y-m-d");
       
        //Guardar Archivo
       $fichero = fopen('backups/Copia-Seguridad-'.$fecha.'.sql','w+');
        
       fwrite($fichero,$return);
       fclose($fichero);
    }
?>

