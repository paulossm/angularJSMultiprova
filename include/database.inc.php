<?php
$connection = mysqli_connect("localhost", "root", "root", "multiprovaOnline");
if(!$connection) {
    die("Failed to connect to the database. " . mysqli_connect_error());
}
?>