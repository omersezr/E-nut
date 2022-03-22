<?php include('servereng.php'); 
if(empty($_SESSION['username'] )){
	header('location: logineng.php');
}
?>
<ul>
<li><a>LANGUAGE</a>
			<ul>
			<li><a href="index.php">Türkçe</a></li>	
		    <li><a href="indexeng.php">English</a></li>  
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
<a href="giriseng.php">
  <img src="logo.png"  width="120" height="125" />
</a>
<html>
<head>
	<title>User registration system using PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header">
	<h2>WELCOME</h2>
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
<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
<p><a href="indexeng.php?logout='1!" style="color:red;">Log In</a></p>
<?php endif ?>
</div>
</body>
</html>