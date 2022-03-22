<?php include('server.php'); 
if(empty($_SESSION['username'] )){
	header('location: login.php');
}
?>
<ul>
<li><a>DİL</a>
			<ul>
			<li><a href="index.php">Türkçe</a></li>	
		    <li><a href="indexeng.php">English</a></li>  
	   </ul>
	<li><a href="contact.php">İLETİŞİM</a></li>
	<li><a href="about.php">HAKKIMIZDA</a></li>	
	<li><a>ÜRÜNLERİMİZ</a>
		<ul>
			<li><a>Fındık</a></li>	
			<li><a>Fıstık</a></li>
			<li><a>Ceviz</a></li>
			<li><a>Badem</a></li>
		</ul>
</ul>
<a href="giris.php">
  <img src="logo.png"  width="120" height="125" />
</a>
<html>
<head>
	<title>User registration system using PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header">
	<h2>HOŞGELDİNİZ</h2>
</div>
<div class="content">	
<?php if (isset($_SESSION['success'])): ?>
<div class="	 success"> 
	<h3>
		<?php 
		echo $_SESSION['success'];
		unset($_SESSION['success']);
		?>
</h3>
</div>
<?php endif ?>
<?php if (isset($_SESSION["username"])): ?>
<p>Hoşgeldiniz <strong><?php echo $_SESSION['username']; ?></strong></p>
<p><a href="index.php?logout='1!" style="color:red;">Giriş Yap</a></p>
<?php endif ?>
</div>
</body>
</html>