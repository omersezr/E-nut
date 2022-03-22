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
	array_push($errors, "Kullanıcı Adı Gerekli");
}

if (empty($email)) {
	array_push($errors, "Email Gerekli");
}
if (empty($password_1)) {
	array_push($errors, "Şifre Gerekli");
}
if ($password_1 !=$password_2) {
	array_push($errors, "Şifre Eşleşmiyor");
}
if (count($errors)==0) {
	$password =md5($password_1);
	$sql="INSERT INTO users (username , email ,password ) VALUES ('$username' ,'$email','$password')";
	mysqli_query($db , $sql);
	$_SESSION['username']=$username;
	$_SESSION['success']="Giriş Yapılıyor";
	header('location:index.php');
	
}
}

if (isset($_POST['login'])) {
	$username = mysqli_real_escape_string($enlace, $_POST['username']);
    $password = mysqli_real_escape_string($enlace, $_POST['password']);

if (empty($username)) {
	array_push($errors, "Kullanıcı Adı Gerekli");
}

if (empty($password)) {
	array_push($errors, "Şifre Gerekli");
}

if (count($errors) == 0) {
	$password =	md5($password); 
	$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
	$result = mysqli_query($db,$query);
	if (mysqli_num_rows($result) == 1) {
		$_SESSION['username']=$username;
	    $_SESSION['success']="Giriş Yapıldı";
	    header('location:giris.php');
		
	}else{
		array_push($errors,"Yanlış Kullanıcı Adı/Şifre");
		
	}
}
}
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['username']);
	header('location: login.php');
}

?>	