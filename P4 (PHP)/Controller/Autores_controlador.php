<?php

require_once("Model/Autores_modelo.php");

$autores = new Autores_modelo();
$datosautores = $autores->getAutores();

require("View/Lateral.php");


?>