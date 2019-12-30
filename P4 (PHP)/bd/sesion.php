<!DOCTYPE html>
<html>
<head>
<meta charset="UFT-8">
    <title id="titulo">Variables recibidas </title>
</head>
    
<body>
<?php
    $username=$_POST['username'];
    
    echo '<p> Bienvenido '.$username.'</p>';
    //echo $username;
    $_SESSION["username"] = $username;
      echo $_SESSION["username"];
      echo $_SESSION["username"];
    echo '<a href=../index.php><input type="submit" name ="volver" value="Volver">';
  
    
    //require("View/Login.php");
?>
</body>
</html>