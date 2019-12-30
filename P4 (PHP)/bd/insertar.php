<?php
    echo $db;
    msql_query($GLOBALS["conn"],"INSERT INTO libros (Titulo) VALUES ('$_POST[titulo]');");
?>