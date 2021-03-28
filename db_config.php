<?php
$host = "localhost";
$username = "fabian_daniel00";
$password = "asd123";
$db = "notebook";

($connection = mysqli_connect("$host", "$username", "$password", "$db")) or
    die(mysqli_error($connection));
?>
