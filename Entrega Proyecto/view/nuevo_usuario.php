
<main>
    <h3>Añadir un nuevo Usuario</h3>
    <?php
    
    if($nombre_nuevo == NULL)
        $nombre_nuevoerror = "<span>Rellenar nombre</span>";
    else
        $nombre_nuevoerror = "";
    if($apellidos == NULL)
        $apellidoserror = "<span>Rellenar Apellidos</span>";
    else
        $apellidoserror = "";
    if($email_nuevo == NULL)
        $email_nuevoerror = "<span>Rellenar email</span>";
    else
        $email_nuevoerror = "";
    if($email_nuevo == NULL)
        $email_nuevoerror = "<span>Rellenar email</span>";
    else
        $email_nuevoerror = "";
    if($cp == NULL)
        $cperror = "<span>Rellenar código postal</span>";
    else
        $cperror = "";
    if($telefono == NULL)
        $telefonoerror = "<span>Rellenar telefono</span>";
    else
        $telefonoerror = "";
    if($pass_nueva == NULL)
        $pass_nuevaerror = "<span>Rellenar contraseña </span>";
    else
        $pass_nuevaerror = "";
   
    if(empty($_POST['nombre_nuevo']) or empty($_POST['apellidos']) or empty($_POST['email_nuevo']) or empty($_POST['telefono']) or empty($_POST['cp']) or empty($_POST['pass_nueva'])){
        
    ?>
    <form action="index.php?seccion=nuevo_usuario"  method="POST">
        <label>Nombre: <input type="text" name="nombre_nuevo" <?php if(isset($_POST["nombre_nuevo"])) echo 'value = "'.$nombre_nuevo.'"'; ?>></label>
        <?php
        if(isset($_POST["nombre_nuevo"])){
            echo $nombre_nuevoerror;
        }else{
            echo "";
        }
        ?>
        <label>Apellidos: <input type="text" name="apellidos" ></label>
        <?php
        if(isset($_POST["apellidos"])){
            echo $apellidoserror;
        }else{
            echo "";
        }
        ?>
        <label>Email: <input type="email" name="email_nuevo" <?php if(isset($_POST["email_nuevo"])) echo 'value = "'.$email_nuevo.'"'; ?>></label>
        <?php
        if(isset($_POST["email_nuevo"])){
            echo $email_nuevoerror;
        }else{
            echo "";
        }
        ?>
        <label>Código Postal: <input type="number" min="5"  name="cp" ></label>
        <?php
        if(isset($_POST["cp"])){
            echo $cperror;
        }else{
            echo "";
        }
        ?>
        <label>Telefono: <input type="text" min="9"  name="telefono" ></label>
        <?php
        if(isset($_POST["telefono"])){
            echo $telefonoerror;
        }else{
            echo "";
        }
        ?>
        <label>Contraseña: <input type="password" name="pass_nueva" <?php if(isset($_POST["pass_nueva"])) echo 'value = "'.$pass_nueva.'"'; ?>></label>
        <?php
        if(isset($_POST["pass_nueva"])){
            echo $pass_nuevaerror;
        }else{
            echo "";
        }
        ?>
        <label>Rol:
            <select name="rol">
                <option>colaborador</option>
                <option>administrador</option>
            </select>
        </label>
        <label><input type="submit" value="Añadir usuario"></label>
    </form>
    <?php } else {?>
       <form action="index.php?seccion=añadir_usuario"  method="POST">
        <label>Nombre: <input readonly type="text" name="nombre_nuevo" <?php if(isset($_POST["nombre_nuevo"])) echo 'value = "'.$nombre_nuevo.'"'; ?>></label>
        
        <label>Apellidos: <input readonly type="text" name="apellidos" <?php if(isset($_POST["apellidos"])) echo 'value = "'.$apellidos.'"'; ?>></label>
        <label>Email: <input readonly type="email" name="email_nuevo" <?php if(isset($_POST["email_nuevo"])) echo 'value = "'.$email_nuevo.'"'; ?>></label>
        
        <label>Código Postal: <input readonly type="number" min="5"  name="cp" <?php if(isset($_POST["cp"])) echo 'value = "'.$cp.'"'; ?>></label>
        <label>Telefono: <input readonly type="text" min="9"  name="telefono" <?php if(isset($_POST["telefono"])) echo 'value = "'.$telefono.'"'; ?>></label>
        <label>Contraseña: <input readonly type="password" name="pass_nueva" <?php if(isset($_POST["pass_nueva"])) echo 'value = "'.$pass_nueva.'"'; ?>></label>
        
        <label>Rol:
            <select name="rol" readonly <?php if(isset($_POST["rol"])) echo 'value = "'.$rol.'"'; ?>>
                <option>colaborador</option>
                <option>administrador</option>
            </select>
        </label>
        <label><input type="submit" name="añadir_usuario" value="Realizar cambios"></label>
        
    </form> 
    <a href="index.php?seccion=nuevo_usuario"><input type="submit" value="Declinar"/></a>
    
    <?php 
    }
    ?>
</main>