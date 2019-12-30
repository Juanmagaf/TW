<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="author" content="Juan Manuel González-Aurioles">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" type="text/css" href="css/Css.css">
    <title>Página Pedidos Libreria</title>
</head>
<main>
        <!-- Contenido principal -->
        
    
        <?php
    if(isset($_POST['pedido'])){ 
        $pedido = $_POST['pedido'];
    }else{
        $pedido = false; 
    }
        if(!$pedido){
        echo "PEDIDO NO REALIZADO";
        foreach($datoslib as $libro) { 
            echo'<h2>Pedidos</h2>
                <img src="'.$libro["Imagen"].'" alt="Harry1"/>
                <p>'.$libro["Título"].'Harry Potter y la piedra filosofal</p>
                <p>'.$libro["Autor"].'</p>
                <p>'.$libro["Editorial"].'</p>
                <p>ISBN XXX-XXX-XXX</p>
                <p>'.$libro["Año"].'</p>
                <p>'.$libro["Descripción"].'</p>
                <p>PRECIO '.$libro["Dinero"].'€ </p>';
        }
    
        
        echo'<h2>Inscripción de usuario para el pedido: </h2>
        <form action="index.php?seccion=comprar&pedido=true&indice='.$libro["Índice"].'" method="POST">
            <label>- Nombre y apellidos: <input type="text" name="nombre" required><br></label>
            <label>- Direción de envío: <input type=direccion name="direccion" required><br></label>
            <label>- EMail: <input type="email" name="email" required><br></label>
            <label>- Número de tarjeta: <input type="text" name="numtarjerta"required ><br></label>

            <label>- Fecha de caducidad: <input type="date" name="fecha" required><br></label>
            <label>- CVC: <input type="number" name="cvc" min="100" max="999"  required><br></label>


            <p> - Marque si procede </p>
            <label><input type="checkbox" name="condiciones" value="procede" required> He leído y acepto condiciones de compra<br></label>
            <label><input type="checkbox" name="informacion" value="noticias"> Deseo recibir informacíon sobre novedades<br></label>
            <label><input type="checkbox" name="regalo" value="regalo"> Deseo el envío envuelto para regalo<br></label>

            <input type="submit" name="pedido" value="Hacer pedido"/>
            
        </form>';
        
    }else{
        foreach($datoslib as $libro) { 
            echo'<h2>Pedido Realizado con éxito</h2>
                <img src="'.$libro["Imagen"].'" alt="Harry1"/>
                <p>'.$libro["Título"].'</p>
                <p>'.$libro["Autor"].'</p>
                <p>'.$libro["Editorial"].'</p>
                <p>ISBN XXX-XXX-XXX</p>
                <p>'.$libro["Año"].'</p>
                <p>'.$libro["Descripción"].'</p>
                <p>PRECIO '.$libro["Dinero"].'€ </p>';
        }
            if(isset($_POST['regalo'])){
                $envuelto = "si";
            }else
                $envuelto = "no";
          echo'<h2>Inscripción de usuario del pedido realizado: </h2>
          
          <p>Nombre y Apellidos: '.$_POST['nombre'].'</p>
          <p>Dirreción: '.$_POST['direccion'].'</p>
          <p>Correo Electronico: '.$_POST['email'].'</p>
          <p>Nº Tarjeta: '.$_POST['numtarjerta'].'</p>
          <p>Recibe el paquete envuelto de regalo : '.$envuelto.'</p>
          ';
        
    }
            ?>
    <!-- Barra Lateral -->
    <?php
        //require("Lateral.php");
    ?>

</main>
</html>