<?php
include "connection.php";

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM login WHERE `username`='admin' AND `password`='password'";
$result = mysqli_query($conn, $sql);

if ($result) {
    // Redirect to the home page
    header("Location: home.html");
    exit(); // Make sure no further PHP code gets executed after the redirect
} else {
    echo "Username or password incorrect";
}

mysqli_close($conn);
?>
