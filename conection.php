<?php
$servername= "localhost";
$username = "root";
$password = "";
$dbname = "freshshop";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
die("contection not created");
}
?>