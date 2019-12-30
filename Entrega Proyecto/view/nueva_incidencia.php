<main>
    <h3>Añadir una nueva Incidencia</h3>
    
    <?php 
    if($titulo == NULL)
        $tituloerror = "<span>Rellena titulo</span>";
    else
        $tituloerror = "";
    if($lugar == NULL)
        $lugarerror = "<span>Rellenar lugar de la incidencia<span>";
    else
        $lugarerror = "";
    if($descripción == NULL)
        $descripciónerror = "<span>Rellenar descripción de la incidencia</span>";
    else
        $descripciónerror = "";
    //echo $titulo;
    if(empty($_POST['titulo']) or empty($_POST['lugar']) or empty($_POST['descripción'])){
        
    ?>
    <form action="index.php?seccion=incidencia"  enctype="multipart/form-data"  method="POST">
        <label>Título: <input type="text" name="titulo" value="<?php echo"$titulo"; ?>">
        <?php 
        if(isset($_POST["titulo"])){
            echo $tituloerror;
        }else{
            echo "";
        }
        ?>
        </label>
        <label>Lugar : <input type="text" name="lugar" value="<?php echo"$lugar"; ?>">
        <?php 
        if(isset($_POST["lugar"])){
            echo $lugarerror;
        }else{
            echo "";
        }
        ?>
        </label>
        <label>Palabra clave : <input type="text" name="pclave" ></label>
        <label>Descripción: </label>
        <?php 
        if(isset($_POST["descripción"])){
            echo $descripciónerror;
        }else{
            echo "";
        }
        ?>
        <label><textarea name="descripción" rows="20" cols= "90" ><?php echo"$descripción"; ?></textarea></label>
        
        <label><input type="submit" value="Añadir Incidencia"/></label>
    </form> 
   <?php } else {?>
       <form action="index.php?seccion=añadir_incidencia"  enctype="multipart/form-data"  method="POST">
        <label>Título: <input  readonly type="text" name="titulo"'; <?php if(isset($_POST["titulo"])) echo 'value = "'.$titulo.'"'; ?>
                              
                              ></label>
        <label>Lugar : <input  readonly type="text" name="lugar" <?php if(isset($_POST["lugar"])) echo 'value = "'.$lugar.'"'; ?>></label>
        <label>Palabra clave : <input  readonly type="text" name="pclave" <?php if(isset($_POST["pclave"])) echo 'value = "'.$pclave.'"'; ?>></label>
        <label>Descripción: </label>
        <label><textarea  readonly name="descripción" rows="20" cols= "90"><?php if(isset($_POST["descripción"])) echo $descripción; ?></textarea></label>
        <label>Añadir Imagen</label>
        <label><input  readonly type="file" accept=".jpg" name="archivo"></label>
        <label><input type="submit" value="Confirmar datos" name="incidencia_nueva"/></label>
        
    </form> 
    <a href="index.php?seccion=incidencia"><input type="submit" value="Declinar"/></a>
    <?php
    }
    
    ?>
</main>