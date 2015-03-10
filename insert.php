<?php
include('connect.php');
$name = $_POST['name'];
$aka = $_POST['aka'];
$tittle = $_POST['tittle'];
$location = $_POST['location'];
$bio = $_POST['bio'];

mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
$sql = 'UPDATE 
           staff
        SET
           name=:name,
           aka=:aka,
           tittle=:tittle, 
           location=:location,
		   bio=:bio
        WHERE
           id=:1';
mysqli_query($conn, $sql);

/*
 * Use this instead of $connect_error if you need to ensure
 * compatibility with PHP versions prior to 5.2.9 and 5.3.0.
 */
if (mysqli_connect_error()) {
    die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());

} else {
        mysql_close($con);
header("Location: thank_you.php");
    }
?>