<?php include('servereng.php'); ?>
<ul>
<li><a>LANGUAGE</a>
			<ul>
			<li><a href="register.php">Türkçe</a></li>	
		    <li><a href="registereng.php">English</a></li>  
	   </ul>
	<li><a href="contacteng.php">CONTACT US</a></li>
	<li><a href="abouteng.php">ABOUT US</a></li>	
	<li><a>OUR PRODUCTS</a>
		<ul>
			<li><a>NUT</a></li>	
			<li><a>PEANUT</a></li>
			<li><a>WALNUT</a></li>
			<li><a>ALMUND</a></li>
		</ul>
</ul>
<a href="anasayfaeng.php">
  <img src="logo.png"  width="120" height="125" />
</a>
<html>
<head>
	<title>User registration system using PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header">
	<h2>REGISTER</h2>

</div>
<form method="post" action="registereng.php">
	
	<?php include('errors.php');   ?>
	<div class="input-group">
		<label>Username</label>
		<input type="text" name="username" value="<?php echo $username; ?>">
		
	</div>
	<div class="input-group">
		<label>Email</label>
		<input type="text" name="email" value="<?php echo $email; ?>">
		
	</div>
	<div class="input-group">
		<label>Password</label>
		<input type="password" name="password_1">
		
	</div>
	<div class="input-group">
		<label>Confirm Password</label>
		<input type="password" name="password_2">
		
	</div>
	<div class="input-group">
		<button type="submit" name="register" class="btn">Register</button>
		
	</div>
	<p> 
If you are a member <a href="logineng.php"> Sign In</a> <a href="anasayfaeng.php"><br><br>Go homepage
</a>

	</p>
</form>
</body>
</html>
