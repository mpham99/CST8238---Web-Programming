<?php
$servername = "localhost";
$username = "minhcybc_eatery";
$password = "cst8238";
$dbname = "minhcybc_eatery";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";

?>
