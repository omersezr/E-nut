<?php
session_start();
include('db.php');
$status="";
if (isset($_POST['code']) && $_POST['code']!=""){
$code = $_POST['code'];
$result = mysqli_query($con,"SELECT * FROM `products` WHERE `code`='$code'");
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$code = $row['code'];
$price = $row['price'];
$image = $row['image'];

$cartArray = array(
	$code=>array(
	'name'=>$name,
	'code'=>$code,
	'price'=>$price,
	'quantity'=>1,
	'image'=>$image)
);

if(empty($_SESSION["shopping_cart"])) {
	$_SESSION["shopping_cart"] = $cartArray;
	$status = "<div class='box'>Product is added to your cart!</div>";
}else{
	$array_keys = array_keys($_SESSION["shopping_cart"]);
	if(in_array($code,$array_keys)) {
		$status = "<div class='box' style='color:red;'>
		Product is already added to your cart!</div>";	
	} else {
	$_SESSION["shopping_cart"] = array_merge($_SESSION["shopping_cart"],$cartArray);
	$status = "<div class='box'>Product is added to your cart!</div>";
	}

	}
}
?>
<link href='stil.css' rel='stylesheet'>
<ul>
	</li>
	<li><a>KULLANICI</a>
       <ul>
            <li><a href="cart.php">Sepetim</a></li>
			<li><a>Bilgilerim</a></li>
			<li><a href="anasayfa.php">Çıkış Yap</a></li>
       </ul>
<li><a>DİL</a>
			<ul>
			<li><a href="giris.php">Türkçe</a></li>	
		    <li><a href="giriseng.php">English</a></li>  
	   </ul>
	<li><a href="contactgiris.php">İLETİŞİM</a></li>
	<li><a href="aboutgiris.php">HAKKIMIZDA</a></li>	
	<li><a>ÜRÜNLERİMİZ</a>
		<ul>
			<li><a>Fındık</a></li>
			<li><a>Fıstık</a></li>
			<li><a>Ceviz</a></li>
			<li><a>Badem</a></li>
		</ul>
		</ul>
		</ul>
</ul>
<a href="giris.php">
  <img src="logo.png"  width="120" height="125" />
</a>
<html>
<head>
<style>

body {
  background-image: url("background.png");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>

<link rel='stylesheet' href='css/style.css' type='text/css' media='all' />
</head>
<body>
<div style="position:absolute ; top:250px ; left:399px; width:1000px; margin:50  auto;">

 

<?php
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
?>
<div class="cart_div">
<a href="cart.php"><img src="cart-icon.png" /> Cart<span><?php echo $cart_count; ?></span></a>
</div>	
<?php
}

$result = mysqli_query($con,"SELECT * FROM `products`");
while($row = mysqli_fetch_assoc($result)){
		echo "<div class='product_wrapper'>
			  <form method='post' action=''>
			  <input type='hidden' name='code' value=".$row['code']." />
			  <div class='image'><img src='".$row['image']."' width=286.5 height=153 /></div>
			  <div class='name'>".$row['name']."</div>
		   	  <div class='price'>₺".$row['price']."</div>
			  <button type='submit' class='buy'>Buy Now</button>
			  </form>
		   	  </div>";
        }
mysqli_close($con);
?>

<div style="clear:both;"></div>

<div class="message_box" style="margin:10px 0px;">
<?php echo $status; ?>
</div>

<br /><br />

</body>
</html>