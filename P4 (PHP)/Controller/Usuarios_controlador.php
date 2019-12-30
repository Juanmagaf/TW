<?php

require_once("../model/Usuarios_modelo.php");

$username=$_POST['username'];
$password=$_POST['password'];
echo $username;
echo $password;

$_SESSION['username'] = $username;
$user = new Usuario_Modelo();
//$datosuser = $user->getUsuarios();

//if(isset($_REQUEST['seccion']) && $_GET['seccion']=='Catalogo'){
    require_once("../Controller/main.php");
//}


?>