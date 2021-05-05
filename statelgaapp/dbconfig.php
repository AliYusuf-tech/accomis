<?php 

/* Credentials */
$servername = "localhost";
$username = "root";
$password = "";
$database = "statelgadb";


/* Connection */
$conn = new mysqli($servername, $username, $password, $database);

/* If connection fails for some reason */
if ($conn->connect_error) {
	die("Database connection failed: ". $conn->connect_error);
}
// else{
//     echo "connected";
// }
?>

<!-- done -->

