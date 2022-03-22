<?php
session_start();

$enlace = mysqli_connect("localhost", "root", "", "registration");

$username ="";
$email ="";
$errors = array();

$db= mysqli_connect('localhost', 'root', '','registration');
$mysqli = new mysqli("localhost", "root", "", "registration");
if (isset($_POST['register'])) {

	$username = mysqli_real_escape_string($enlace,$_POST['username']);
    $email = mysqli_real_escape_string($enlace, $_POST['email']);
	$password_1 = mysqli_real_escape_string($enlace, $_POST['password_1']);
	$password_2 = mysqli_real_escape_string($enlace, $_POST['password_2']);

if (empty($username)) {
	array_push($errors, "Username Required");
}

if (empty($email)) {
	array_push($errors, "Email Required");
}
if (empty($password_1)) {
	array_push($errors, "Password Required");
}
if ($password_1 !=$password_2) {
	array_push($errors, "Password Does not Match");
}
if (count($errors)==0) {
	$password =md5($password_1);
	$sql="INSERT INTO users (username , email ,password ) VALUES ('$username' ,'$email','$password')";
	mysqli_query($db , $sql);
	$_SESSION['username']=$username;
	$_SESSION['success']="Logging in";
	header('location:indexeng.php');
	
}
}

if (isset($_POST['login'])) {
	$username = mysqli_real_escape_string($enlace, $_POST['username']);
    $password = mysqli_real_escape_string($enlace, $_POST['password']);

if (empty($username)) {
	array_push($errors, "Username Required");
}

if (empty($password)) {
	array_push($errors, "Password Required");
}

if (count($errors) == 0) {
	$password =	md5($password); 
	$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
	$result = mysqli_query($db,$query);
	if (mysqli_num_rows($result) == 1) {
		$_SESSION['username']=$username;
	    $_SESSION['success']="Log In";
	    header('location:giriseng.php');
		
	}else{
		array_push($errors,"Wrong Username/Password");
		
	}
}
}
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['username']);
	header('location: logineng.php');
}

?>	