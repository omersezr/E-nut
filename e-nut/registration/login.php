<?php include('server.php'); ?>
<ul>
<li><a>DİL</a>
			<ul>
			<li><a href="login.php">Türkçe</a></li>	
		    <li><a href="logineng.php">English</a></li>  
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
	<h2>Giriş</h2>

</div>
<form method="post" action="login.php">
	<?php include('errors.php');   ?>
	<div class="input-group">
		<label>Kullanıcı Adı</label>
		<input type="text" name="username">
		
	</div>
	
	<div class="input-group">
		<label>Şifre</label>
		<input type="password" name="password">
		
	</div>
	
	<div class="input-group">
		<button type="submit" name="login" class="btn">Giriş</button>
		
	</div>
	<p> 
	Üye Değil Misin?<a href="register.php"> Kayıt Ol</a> <a href="anasayfa.php"><br><br>Anasayfaya dönmek için tıklayınız </a>

	</p>
</form>
</body>
</html>