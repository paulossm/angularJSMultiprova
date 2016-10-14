<?php

session_start();

include 'database.inc.php';
if( isset($_POST['codigoAvaliacao']) && !empty($_POST['codigoAvaliacao'])) {
    $ = $_POST['codigoAvaliacao'];
}

header("Location: ../home.php");

?>