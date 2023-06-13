<?php
include('dbconnect.php');
	if(isset($_POST['signup'])){
		$name = $_POST['name'];
		$number = $_POST['number'];
		$email = $_POST['email'];
		$password = $_POST['password'];
	}	
if(!empty($name) && !empty($number) && !empty($email) && !empty($password)){
$sql = "INSERT INTO login_signup (name, phone, email, password)
VALUES ('$name', '$number', '$email','$password')";
	if ($conn->query($sql) === TRUE) {
	} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
	}}

// login
if(isset($_POST['login'])){
	$email = $_POST['email'];
	$password = $_POST['password'];
}
	if(!empty($email) && !empty($password)){
	$psw ="SELECT * FROM login_signup WHERE email = '$email' AND password = '$password'";
	$result = $conn->query($psw);     
	if ($result->num_rows === 1) {
		header('location:soon.php');
	}
	}
				
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <title>Login/signup</title>
</head>
<body>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="#" method="post">
			<h1>Create Account</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your email for registration</span>
			<input type="text" placeholder="Name" name="name" value="<?php if(isset($_POST['signup'])){echo $_POST['name'];}?>"/>
			<input type="number" placeholder="Phone number" name="number"value="<?php if(isset($_POST['signup'])){echo $_POST['number'];}?>" />
			<input type="email" placeholder="Email" name="email" value="<?php if(isset($_POST['signup'])){echo $_POST['email'];}?>"/>
			<input type="password" placeholder="Password"  name="password"/>
			<button type="submit" name="signup">Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="#" method="post">
			<h1>Sign in</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f" id='email'></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your account</span>
			<input type="email" placeholder="Email" name="email" value=<?php if(isset($_POST['email'])){echo $_POST['email'];}?>>
			<span style="color:red"><?php if(isset($_POST['email'])){if(empty($_POST['email'])){
				echo "Email can't be empty";
			}} ?></span>
			<input type="password" placeholder="Password"  name="password"/>
			<span style="color:red"><?php if(isset($_POST['password'])){if(empty($_POST['password'])){
				echo "Password can't be empty";
			}} ?></span>
			<a href="#">Forgot your password?</a>
			<button type="submit" name="login">Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>
    <script src="custom.js"></script>
</body>
</html>