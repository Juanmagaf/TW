<nav>
    <?php
        if($_SESSION["rol"] == 'administrador')
            echo'<ul id="barra_nav">
            <li><a href="index.php?seccion=inicio">Ver Incidendias</a></li>
            <li><a href="index.php?seccion=incidencia">Nueva Incidencia</a></li>
            <li><a href="index.php?seccion=propias">Mis incidencias</a></li>
            <li><a href="index.php?seccion=usuarios">Gestión de usuarios</a></li>
            <li><a href="index.php?seccion=log">Ver log</a></li>
            <li><a href="index.php?seccion=bbdd">Gestión de BBDD</a></li>
            </ul>';
        else if($_SESSION["rol"] == 'colaborador')
            echo'<ul id="barra_nav">
            <li><a href="index.php?seccion=inicio">Ver Incidendias</a></li>
            <li><a href="index.php?seccion=incidencia">Nueva Incidencia</a></li>
            <li><a href="index.php?seccion=propias">Mis incidencias</a></li>
            </ul>';
        else 
            echo'<a href="index.php?seccion=inicio">Ver Incidendias</a>';
    ?>
</nav>