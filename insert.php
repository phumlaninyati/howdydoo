<?php
include('connect.php');
$id = $_POST['id'];
$name = $_POST['name'];
$aka = $_POST['aka'];
$tittle = $_POST['tittle'];
$location = $_POST['location'];
$bio = $_POST['bio'];

// Create connection
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
// Check connection
if (mysqli_connect_error()) {
    die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
}
// Update database
$sql = "UPDATE staff SET name='$name', aka='$aka', tittle='$tittle', location='$location', bio='$bio' WHERE id=$id";
// Redirect to Thank you page
if ($conn->query($sql) === TRUE) {
    header("Location: thank_you.php");
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?> 