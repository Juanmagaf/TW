<main>
    <h3>Editar Datos Personales</h3>
    <?php
    // 1-> nombre , 2 -> apellidos, 3-> email, 4 -> postal, 5 -> telefono, 6 -> pass , 7 -> rol
                
            
        echo'
            <form action="index.php?seccion=perfil_actualizado" method="POST">
            <label>Nombre: <input type="text" name="nombre"  value="'.$usuarioe[1].'" required></label>
            <label>Apellidos: <input type="text" name="apellidos"  value="'.$usuarioe[2].'" required></label>
            <label>Email: <input type="email" name="email"  value="'.$usuarioe[3].'" required></label>
            <label>Código Postal: <input type="number" min="5"  name="cp"  value="'.$usuarioe[4].'" required></label>
            <label>Telefono: <input type="text" name="telefono" min="9" value="'.$usuarioe[5].'" required></label>
            

            ';
            if($_SESSION["datos"][8] == "administrador"){
              echo' <label>Rol: <select name="rol">
                        <option>administrador</option>
                        <option>colaborador</option>
                        </select>';
            }
        echo'
            <label><input type="submit" name="cambios_perfil" value="Realizar cambios"></label>
        </form>';
    ?>
</main> 