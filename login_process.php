<?php
session_start();

$conn = mysqli_connect("localhost", "sgc", "sgc", "login_demo");

$username=$_POST["username"];
$password=$_POST["password"];

$sql="select id, password_hash FROM users WHERE username='$username'";
$result=mysqli_query($conn, $sql);

if($row= mysqli_fetch_assoc($result))
{
	if(password_verify($password, $row['password_hash']))
	{
		$_SESSION['user_id']=$row['id'];
		$_SESSION['username']=$username;
		header("Location: dashboard.php");
		exit;
	}
	else
	{
		header("Location: login.html");
		exit;
	}
}	
else
{
	header("Location: login.html");
	exit;
}
?>
