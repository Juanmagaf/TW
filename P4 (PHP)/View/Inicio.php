<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="author" content="Juan Manuel González-Aurioles">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" type="text/css" href="css/Css.css">
    <title>Inicio Libreria</title>
</head> 
        <!-- Contenido Principal -->
    <main>
    <?php 
       
        if($_SESSION['username'] == 'jefe'){
       
        echo'<h1>Bienvenido al Lector de libros</h1>
        <h2>Eventos</h2>
        <!-- Evento 1 -->
        <section>
            <h3>Firma Mónica Gae y María Vera</h3>
            <img src="Imagenes/firmaMonica.jpg" alt="Foto_Monica" />    
            <p>Librerías Picasso y Valparaíso Ediciones les invita a la firma de las autoras Mónica Gae y María Vera. El acto tendrá lugar en nuestro centro de Granada, calle Obispo Hurtado 5. Os esperamos.
            </p>
            <p>Martes 15 de marzo de 2019 a las 19:00</p>
        </section>
        <!-- Evento 2 -->
        <section>
            <h3>Encuentro con el autor Daniel Morales Escobar</h3>
            <img src="Imagenes/DanielMorales.jpg" alt="Foto_Dani"/>    
            <p>Librerías Picasso les invita al encuentro con el autor Daniel Morales Escobar. Nos presentará su obra Un maestro en la República, publicado por Almizate Editorial. El acto tendrá lugar en nuestro centro de Granada, calle Obispo Hurtado 5 Os esperamos.
            </p>
            <p>Miércoles 13 de marzo de 2019 a las 19:00</p>
        </section>
        <!-- Evento 3 -->
        <section>
            <h3>Presentación del libro "Rock progresivo para novatos"</h3>
            <img src="Imagenes/rock-progresivo-para-novatos.jpg" alt="Foto_Rock"/> 
            <p>Librerías Picasso y Editorial Círculo Rojo les invitan a la presentación del libro de Ricardo Hernández</p>
            <p>Viernes 15 de marzo de 2019 a las 19:00</p>
        </section>   
    
    </main>';
    
     }else{
            
            echo'<h1>Bienvenido al Lector de libros</h1>
        <h2>Eventos</h2>
        <!-- Evento 1 -->
        <section>
            <h3>Firma Mónica Gae y María Vera</h3>
            <img src="Imagenes/firmaMonica.jpg" alt="Foto_Monica" />    
            <p>Librerías Picasso y Valparaíso Ediciones les invita a la firma de las autoras Mónica Gae y María Vera. El acto tendrá lugar en nuestro centro de Granada, calle Obispo Hurtado 5. Os esperamos.
            </p>
            <p>Martes 15 de marzo de 2019 a las 19:00</p>
        </section>
        <!-- Evento 2 -->
        <section>
            <h3>Encuentro con el autor Daniel Morales Escobar</h3>
            <img src="Imagenes/DanielMorales.jpg" alt="Foto_Dani"/>    
            <p>Librerías Picasso les invita al encuentro con el autor Daniel Morales Escobar. Nos presentará su obra Un maestro en la República, publicado por Almizate Editorial. El acto tendrá lugar en nuestro centro de Granada, calle Obispo Hurtado 5 Os esperamos.
            </p>
            <p>Miércoles 13 de marzo de 2019 a las 19:00</p>
        </section>
        <!-- Evento 3 -->
        <section>
            <h3>Presentación del libro "Rock progresivo para novatos"</h3>
            <img src="Imagenes/rock-progresivo-para-novatos.jpg" alt="Foto_Rock"/> 
            <p>Librerías Picasso y Editorial Círculo Rojo les invitan a la presentación del libro de Ricardo Hernández</p>
            <p>Viernes 15 de marzo de 2019 a las 19:00</p>
        </section>';
            
        }
        
        ?>
        
    <?php
        //require("Lateral.php");
    ?>
</main>
</html>