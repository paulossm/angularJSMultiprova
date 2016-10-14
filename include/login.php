<?php

session_start();

include 'database.inc.php';

$mat = $_POST['matricula'];
$senha = $_POST['senha'];

$sql = "INSERT INTO alunos (matricula, senha) VALUES ('$mat', '$senha')";
$result = mysqli_query($connection, $sql);

$_SESSION['matricula'] = $mat;

header("Location: ../home.php");

?>