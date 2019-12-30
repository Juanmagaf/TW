<html>
<aside>
        <?php
    
    // 1 = nombre, 2 = apellidos, 3 = email , 4 =postal , 5 = telefono , 6 = pass, 7 = foto, 8 = rol
        if($_SESSION['rol'] == 'administrador' or $_SESSION['rol'] == 'colaborador' ){
            
            echo'
                <h3> Bienvenido '.$_SESSION['rol'].'<h3>
                <h2> '.$_SESSION["datos"][1].'</h2>
                <img id="img_perfil" src='.$_SESSION["datos"][7].' alt="Foto de perfil"><br/>
                <form method="post"  action="index.php?seccion=inicio" enctype="multipart/form-data">
                    <input type="file" accept=".jpg" name="archivo" />
                    <input type="submit" value="Cambiar foto" name="botonf"/>
                    
                </form>
                <form action="index.php?seccion=editarp" method="POST">
                <input type="hidden" name="email" value="'.$_SESSION["datos"][3].'">
                    <input type="submit" value="Editar Perfil"/>
                </form>
                <form action="index.php" method="POST">
                    <input type="submit" name=logout value="Logout" />       
                </form>';
        
        }else{
           echo'
                <form action="index.php?seccion=inicio" method="POST">
                <!--<form action="bd/sesion.php" method="POST">-->
                    <label>Email: <input type="email" name="email" required></label>
                    <label>Clave: <input type="password" name="pass" required></label>
                    <p class="centro"><input type="submit" name="login" value="Login"></p>
                </form>';
            if(isset($_POST['email']) and  isset($_POST['pass']) and isset($_SESSION["datos"])){
                echo 'Te has equivocado de email o contraseña';
            }
        
        }
             
        
        
                
            ?>
        <h3>Los que más añaden</h3>
        <ul>
            <li>l. Juan González</li>
            <li>ll. Rosa Mellado</li>
            <li>lll. Pepe Contreras</li>

        </ul>
        
        <h3>Los que más publican</h3>
        <ul>
            <li>l. Cristina García</li>
            <li>ll. Pedro Fernández</li>
            <li>lll. Javier Sanchez</li>

        </ul>
    </aside>    
</html>