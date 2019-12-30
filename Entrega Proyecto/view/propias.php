<main>
    
                 
            <?php
           
            foreach($datosinc as $inc) {
                echo ' <article id="borde_negro"> 
                <h2>'.$inc["Titulo"].'</h2> 

                <table>
                    <tr>
                        <th>Lugar: '.$inc["Lugar"].'</th>
                        <th>Fecha: '.$inc["Fecha"].'</th>
                        <th>Creador por: '.$inc["Usuario"].'</th>
                    </tr>
                    <tr>
                        <th>Palabras clave: '.$inc["PClaves"].'</th>
                        <th>Estado: '.$inc["Estado"].'</th>
                        <th>Positivos: '.$inc["Positivos"].'</th>
                        <th>Negativos: '.$inc["Negativos"].'</th>
                    </tr>
                </table>

                <p>Descripción: '.$inc["Descripcion"].'</p>
                <p>Imagenes: </p><img id="img_perfil" src="'.$inc["Imagenes"].'" alt="Foto_incidencia">
                <p>Comentarios: '.$inc["Comentarios"].'</p>ç
                
                <form method="POST"  action="index.php?seccion=editar_incidencia2">
                    <label><input type="image" id="logo" src=imagenes/lapiz.png></label>
                    <label><input type="hidden" name="indice" value="'.$inc['id'].'"></label>
                </form>
                
                <a href="index.php?seccion=comprar&indice='.$inc["id"].'" class="enlace">Comentario</a>
                </article>
                    ';
                }
            ?> 
               
    
        
        
    </main>