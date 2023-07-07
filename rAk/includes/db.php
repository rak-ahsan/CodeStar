<?php
$servername = "rakahsan.online";
$username = "rakib";
$password = "rakahsan@project.com";
$dbname="rakib_project1";

$conn = new mysqli($servername, $username, $password,$dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>