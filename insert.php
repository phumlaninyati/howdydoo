<?php
include('connect.php');
$name = $_POST['name'];
$aka = $_POST['aka'];
$tittle = $_POST['tittle'];
$location = $_POST['location'];
$bio = $_POST['bio'];

mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
$sql = "INSERT INTO staff (id, name, aka, tittle,location, bio) VALUES (NULL, '$name', '$aka', '$tittle', '$location', '$bio')";
mysqli_query($conn, $sql);
?>