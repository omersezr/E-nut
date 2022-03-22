<?php include('server.php'); ?>
<ul>
<li><a>DİL</a>
			<ul>
			<li><a href="register.php">Türkçe</a></li>	
		    <li><a href="registereng.php">English</a></li>  
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
<a href="anasayfa.php">
  <img src="logo.png"  width="120" height="125" />
</a>
<html>
<head>
	<title>User registration system using PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header">
	<h2>Üye Ol</h2>

</div>
<form method="post" action="register.php">
	
	<?php include('errors.php');   ?>
	<div class="input-group">
		<label>Kullanıcı Adı</label>
		<input type="text" name="username" value="<?php echo $username; ?>">
		
	</div>
	<div class="input-group">
		<label>Email</label>
		<input type="text" name="email" value="<?php echo $email; ?>">
		
	</div>
	<div class="input-group">
		<label>Şifre</label>
		<input type="password" name="password_1">
		
	</div>
	<div class="input-group">
		<label>Şifre Tekrar</label>
		<input type="password" name="password_2">
		
	</div>
	<div class="input-group">
		<button type="submit" name="register" class="btn">Kayıt Ol</button>
		
	</div>
	<p> 
Üyeliğiniz var ise <a href="login.php"> Oturum aç</a> <a href="anasayfa.php"><br><br>Anasayfaya dönmek için tıklayınız </a>

	</p>
</form>
</body>
</html>
