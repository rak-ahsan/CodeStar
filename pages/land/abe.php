<?php
include("../../includes/db.php");

$name = $_POST['lname'];
$land_id = $_POST['land_id'];

$sql = "UPDATE land SET land_name='$name' where land_id =$land_id";
$conn->query($sql);

?>