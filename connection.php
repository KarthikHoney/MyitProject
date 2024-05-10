<?php

$localhost = "localhost";
$username = "root";
$password = "";
$dbname = "myitadmin";

// Create connection
$conn = mysqli_connect($localhost, $username, $password, $dbname);

// Check connection
if ($conn) {
    echo "Connected successfully";
}
else{
    echo 'Not connected';
    die("Connection failed: " . mysqli_connect_error());
}
    


?>