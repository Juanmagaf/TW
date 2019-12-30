<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="author" content="Juan Manuel González-Aurioles">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" type="text/css" href="css/Css.css">

    <title>Página Catalogo Libreria</title>
</head>
        <!-- Contenido principal -->
    <main>
    <?php
        echo '<h2>Catalogo</h2>';
        if($_SESSION['username'] == 'jefe'){
            //echo $_SESSION['username'];
                foreach($datoslibrosb as $libro) {       

                
                echo '<!-- Libro 1 -->
                <section>
                    <img src='.$libro["Imagen"].' alt="'.$libro["Título"].'"/>
                    <p></p>
                    <h4>'.$libro["Título"].'</h4>
                    <p>'.$libro["Autor"].'</p>
                    <p>'.$libro["Editorial"].'</p>
                    <h4>'.$libro["Dinero"].'€</h4>
                    <!-- Mal hecho no estandar
                    <a href="Pedidos.html"><input type="submit" value="Comprar"/></a>
                    -->
                    <a href="Pedidos.html" class="enlace">Comprar</a>
                </section> ';
                } 
            
                
        }else{
            //echo $_SESSION['username'];
                foreach($datoslibrosb as $libro) {       

                echo '
                <!-- Libro 1 -->
                <section>
                    <img src='.$libro["Imagen"].' alt="'.$libro["Título"].'"/>
                    <p></p>
                    <h4>'.$libro["Título"].'</h4>
                    <p>'.$libro["Autor"].'</p>
                    <p>'.$libro["Editorial"].'</p>
                    <h4>'.$libro["Dinero"].'€</h4>
                    <!-- Mal hecho no estandar
                    <a href="Pedidos.html"><input type="submit" value="Comprar"/></a>
                    -->
                    <a href="Pedidos.html" class="enlace">Comprar</a>
                </section> ';
                } 
        }
        /*<!-- Libro 2 -->
         <section>
             <img src='.$libro["Imagen"].' alt="Preludio"/>
            <p></p>
            <h4>'.$libro["Título"].'Preludio</h4>
            <p>'.$libro["Autor"].'Ruiz Mantilla Jesus</p>
            <p>'.$libro["Editorial"].'Galaxia</p>
            <h4>'.$libro["Dinero"].'17,90€</h4>
            <a href="Pedidos.html" class="enlace" >Comprar</a>
        </section>
        <!-- Libro 3 -->
        <section>
            <img src="Imagenes/quienno.jpg" alt="Quienno"/>
            <p></p>
            <h4>Quién no</h4>
            <p>Claudia Piñeiro</p>
            <p>Alfaguara</p>
            <p><strong>18,90€</strong></p>
            <a href="Pedidos.html" class="enlace" >Comprar</a>
        </section>
        <!-- Libro 4 -->
        <section>
            <img src="Imagenes/parahelga.jpg" alt="ParaHelga"/>
            <p></p>
            <h4>Para Helga</h4>
            <p>Birgisson Bergsveinn</p>
            <p>Lumen</p>
            <p><strong>14,90€</strong></p>
            <a href="Pedidos.html" class="enlace">Comprar</a>
        </section>
    </main>'*/
           
           ?>  
        </main>
    <!-- Barra lateral -->
    <?php
        //require("Lateral.php");
    ?> 
    
</html>