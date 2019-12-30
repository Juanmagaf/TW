<html>
    <main>
    
    <h3>¿Desea confirmar el borrado de dicho usuario?</h3>
        <?php
            echo $email;
        ?>
            <form method="post"  action="index.php?seccion=borrado" enctype="multipart/form-data">
                 <?php
                echo '
                <input type="hidden" name="email" value="'.$email.'">'; 
                
                ?>
            <input type="submit" value="Aceptar" name="Borrar_Usuario"/>
                
        </form>
        <a href="index.php?seccion=usuarios"><input type="submit" value="Declinar" name="Declinar"/></a>
    
    </main>

</html>