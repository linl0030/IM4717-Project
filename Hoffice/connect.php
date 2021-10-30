<?php
$servername = "localhost";
$username = "f32ee";
$password = "f32ee";
$DBname = "f32ee";

$conn = mysqli_connect($servername, $username, $password, $DBname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
