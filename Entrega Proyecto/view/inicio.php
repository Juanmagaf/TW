<html lang="es">
    <main>
    <article id="borde_negro">
        <p class="tabulador">Listado de incidencias</p>
        <h3 class="tabulador">Criterios de búsqueda:</h3>
        <h5 class="tabulador">Ordenar por: </h5>
        <ul id="barra_inci">
            <li><input type="radio" name="Ordenar[]" value="Antiguedad"> Antigüedad (primero las más recientes)</li>
            <li><input type="radio" name="Ordenar[]" value="Positivos"> Número de positivos (de más a menos)</li>
            <li><input type="radio" name="Ordenar[]" value="Netos"> Número de positivos netos (de más a menos)</li>
        </ul>
        <h5 class="tabulador">Incidencias que contengan: </h5>
        <ul id="barra_inci">

            <li>Texto de búsqueda: <input type="text" name="Busqueda"></li>
            <li>Lugar: <input type="text" name="Lugar"></li>
        </ul>    

        <h5 class="tabulador">Estado: </h5>
        <ul id="barra_estado">

            <li><input type="checkbox" value="Pendiente"> Pendiente</li>
            <li><input type="checkbox" value="Comprobada"> Comprobada</li>
            <li><input type="checkbox" value="Tramitada"> Tramitada</li>
            <li><input type="checkbox" value="Irresoluble"> Irresoluble</li>
            <li><input type="checkbox" value="Resuelta"> Resuelta</li>
        </ul>

        <ul>Incidencias por página: 
            <select name="paginas"> 
                <option>1 incidencia</option>
                <option>2 incidencias</option>
                <option>3 incidencias</option>
                <option>4 incidencias</option>
                <option>5 incidencias</option>
            </select>
        </ul>
        <p class="centro"><input type="button" name="filtros" value="Aplicar criterios de búsqueda"></p>
    </article>
        <!--Para cada incidencia-->
        <?php
            foreach($datosinc as $inc) {
                
                echo' 
                    <article id="borde_negro">
                        <p></p>
                        <h2>'.$inc["Titulo"].'</h2> 

                        <table>
                            <tr>
                                <th>Lugar: '.$inc["Titulo"].'</th>
                                <th>Fecha: '.$inc["Lugar"].'</th>
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
                        <p>Comentarios:'.$inc["Comentarios"].'</p>
                        
                       
                        
                        <form method="POST"  action="index.php?seccion=editarp">
                            <input type="image" id="logo" src=imagenes/mal.png name="bien">
                            <input type="hidden" name="email" value="'.$inc['Usuario'].'">
                        </form>
                        <form method="POST"  action="index.php?seccion=editarp">
                            <input type="image" id="logo" src=imagenes/bien.png name="mal" >
                            <input type="hidden" name="email" value="'.$inc['Usuario'].'">
                        </form>
                        <a href="index.php?seccion=comprar&indice='.$inc["id"].'" class="enlace">Comentario</a>';
                        
                        if($_SESSION["rol"] == 'administrador'){
                            
                            echo'<a href="index.php?seccion=editar_incidencia&indice='.$inc["id"].'" class="enlace">Editar</a>';
                        
                        }
                echo'
                   </article>
                   ';
            }
        ?>  
    
   
    </main>
</html>