<main>
    <?php
    echo'
    <form action="index.php?seccion=incidencia_modificada"  enctype="multipart/form-data"  method="POST">
        <label>Título: <input type="text" name="titulo" value="'.$datosincidencia[0]["Titulo"].'" required ></label>
        <label>Lugar : <input type="text" name="lugar" value="'.$datosincidencia[0]["Lugar"].'" required></label>
        
        <label>Palabra clave : <input type="text" name="pclave" value="'.$datosincidencia[0]["PClaves"].'" required></label>
        
        ';
        if($_SESSION["rol"] == "administrador"){
         echo'<label>Estado: 
            <select name="estado">
            <option>'.$datosincidencia[0]["Estado"].'</option>
            <option>pendiente</option>
            <option>comprobada</option>
            <option>tramitada</option>
            <option>irresoluble</option>
            <option>resuelta</option>
            </select>
        </label>';
        }else{
            echo'<label>Estado: 
            <select readonly name="estado" value="'.$datosincidencia[0]["Estado"].'">
            <option>'.$datosincidencia[0]["Estado"].'</option>
            </select>
            </label>';
        }
        echo'
        <label>Descripción: </label>
        <label><textarea name="descripción" rows="20" cols= "90" value="'.$datosincidencia[0]["Descripcion"].'" required>'.$datosincidencia[0]["Descripcion"].'</textarea></label>
        <label><input type="hidden" name="indice" value="'.$datosincidencia[0]["id"].'" ></label>
        <label><input type="submit" value="Modificar Incidencia" name="incidencia_modificada"></label>
        
        
    </form>';
            
            ?>

</main>