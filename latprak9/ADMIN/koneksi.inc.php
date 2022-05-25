<?php

$servername = "localhost";
$username = "a122010190";
$password = "";
$dbname = "db_kontak";

//create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
//check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());

mysqli_close($conn);
}

?>