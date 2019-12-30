<main>
<h2 id="centro">Gestión de Usuarios</h2>
    <a href="index.php?seccion=nuevo_usuario"><input type=button value="Añadir nuevo usuario"></a>
        <div class="grid-usuarios">
             
            <?php
            //var_dump($usuarios);
            foreach($usuarios as $usr) {
            echo '
            <div><img id="img_perfil" src='.$usr["foto"].'></div>
            
            <div>
            <p>Usuario: '.$usr['nombre'].' Email: '.$usr['email'].' </p>
            <p>CP: '.$usr['postal'].' Telefono: '.$usr['telefono'].' </p>
            <p>Estado: Conectado Rol: '.$usr['rol'].' </p>
            </div>
           
            <div>
              
              <form method="POST"  action="index.php?seccion=editarp">
                <input type="image" id="logo" src=imagenes/lapiz.png name="Editar_Perfiles">
                <input type="hidden" name="email" value="'.$usr['email'].'">
              </form>
              
              <form method="POST"  action="index.php?seccion=borraruser">
                <input type="image" id="logo" src=imagenes/basura.png >
                <input type="hidden" name="email" value="'.$usr['email'].'">
              </form>
             
        </div>    
            
            ';
            }
            ?>
    </div>
</main>