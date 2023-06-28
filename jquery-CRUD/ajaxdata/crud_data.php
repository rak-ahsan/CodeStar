<?php 

$db = new mysqli('localhost','root','','jquery_evidence');

// for save
if(isset($_POST['saveemail'])){	
	$email = trim($_POST['saveemail']);
	$pass = trim($_POST['pass']);
	
	$db->query("insert into user(email,pass)values('$email','$pass')");
	
	echo "<span style='color:green'>Save successfully</span>";
}

// for update
if(isset($_POST['upid'])){	
	$upid = trim($_POST['upid']);
	$email = trim($_POST['email']);
	$pass = trim($_POST['pass']);
	
	$db->query("update user set email='$email',pass='$pass' where id='$upid' ");
	
	echo "<span style='color:green'>Update successfully</span>";
}

// for delete
if(isset($_POST['id'])){	
	$id = trim($_POST['id']);
	
	$db->query("delete from user where id='$id'");
	
	echo "<span style='color:red'>Delete successfully</span>";
}



?>