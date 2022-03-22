<?php include('servereng.php'); ?>
<ul>
<li><a>LANGUAGE</a>
			<ul>
			<li><a href="login.php">Türkçe</a></li>	
		    <li><a href="logineng.php">English</a></li>  
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
	<h2>Log In</h2>

</div>
<form method="post" action="logineng.php">
	<?php include('errors.php');   ?>
	<div class="input-group">
		<label>Username</label>
		<input type="text" name="username">
		
	</div>
	
	<div class="input-group">
		<label>Password</label>
		<input type="password" name="password">
		
	</div>
	
	<div class="input-group">
		<button type="submit" name="login" class="btn">Log In</button>
		
	</div>
	<p> 
	Not a member?<a href="registereng.php"> Register</a> <a href="anasayfaeng.php"><br><br>Go homepage
 </a>

	</p>
</form>
</body>
</html>