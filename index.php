<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
</head>
<body>
    <h2>Login</h2>
    <form method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" ><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" ><br>

        <input type="submit" name="submit" value="Login">
    </form>
</body>
</html>

<?php session_start();
include('includes/db.php');

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $sql = "SELECT * FROM land_agent WHERE user_name='$username' AND password='$password'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    if ($result->num_rows > 0){

        $_SESSION['role'] = $row['user_id'];
        $_SESSION['id'] = $row['user_id'];
        $_SESSION['username'] = $row['user_name'];
        $_SESSION['loc'] = $row['land_agent_location'];
        $_SESSION['login'] = 'yes';

        if($row['user_id']==1){
            header("location:pages/index/");
        }

        if($row['user_id']==2){
            header("location:pages/agent/agent.php");
            
        }
        
    } else {
        echo "no";
    }
}
?>
