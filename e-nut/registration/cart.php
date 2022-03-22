<?php
session_start();
$status="";
if (isset($_POST['action']) && $_POST['action']=="remove"){
if(!empty($_SESSION["shopping_cart"])) {
	foreach($_SESSION["shopping_cart"] as $key => $value) {
		if($_POST["code"] == $key){
		unset($_SESSION["shopping_cart"][$key]);
		$status = "<div class='box' style='color:red;'>
		Ürün sepetinizden çıkarıldı!</div>";
		}
		if(empty($_SESSION["shopping_cart"]))
		unset($_SESSION["shopping_cart"]);
			}		
		}
}

if (isset($_POST['action']) && $_POST['action']=="change"){
  foreach($_SESSION["shopping_cart"] as &$value){
    if($value['code'] === $_POST["code"]){
        $value['quantity'] = $_POST["quantity"];
        break; 
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
			<li><a href="anasayfa.php">Çıkış Yap</a></li>
       </ul>
<li><a>DİL</a>
			<ul>
			<li><a href="cart.php">Türkçe</a></li>	
		    <li><a href="carteng.php">English</a></li>  
	   </ul>
	<li><a href="contactgiris.php">İLETİŞİM</a></li>
	<li><a href="aboutgiris.php">HAKKIMIZDA</a></li>	
	<li><a>ÜRÜNLERİMİZ</a>
		<ul>
			<li><a href="findik.php">Fındık</a></li>
			<li><a href="fistik.php">Fıstık</a></li>
			<li><a href="ceviz.php">Ceviz</a></li>
			<li><a href="badem.php">Badem</a></li>
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
<div style="width:700px; margin:50 auto;">
  
<?php
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
?>
<div class="cart_div">
<a href="cart.php">
<img src="cart-icon.png" /> Sepet
<span><?php echo $cart_count; ?></span></a>
</div>
<?php
}
?>

<div class="cart">
<?php
if(isset($_SESSION["shopping_cart"])){
    $total_price = 0;
?>	
<table class="table">
<tbody>
<tr>
<td></td>
<td>ÜRÜN ADI</td>
<td>MİKTAR</td>
<td>BİRİM FİYAT</td>
<td>ÜRÜN TOPLAMI</td>
</tr>	
<?php		
foreach ($_SESSION["shopping_cart"] as $product){
?>
<tr>
<td><img src='<?php echo $product["image"]; ?>' width="50" height="40" /></td>
<td><?php echo $product["name"]; ?><br />
<form method='post' action=''>
<input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
<input type='hidden' name='action' value="remove" />
<button type='submit' class='remove'>Sil</button>
</form>
</td>
<td>
<form method='post' action=''>
<input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
<input type='hidden' name='action' value="change" />
<select name='quantity' class='quantity' onchange="this.form.submit()">
<option <?php if($product["quantity"]==1) echo "selected";?> value="1">1</option>
<option <?php if($product["quantity"]==2) echo "selected";?> value="2">2</option>
<option <?php if($product["quantity"]==3) echo "selected";?> value="3">3</option>
<option <?php if($product["quantity"]==4) echo "selected";?> value="4">4</option>
<option <?php if($product["quantity"]==5) echo "selected";?> value="5">5</option>
</select>
</form>
</td>
<td><?php echo "₺".$product["price"]; ?></td>
<td><?php echo "₺".$product["price"]*$product["quantity"]; ?></td>
</tr>
<?php
$total_price += ($product["price"]*$product["quantity"]);
}
?>
<tr>
<td colspan="5" align="right">
<strong>TOPLAM: <?php echo "₺".$total_price; ?></strong>
</td>
</tr>
</tbody>
</table>		
  <?php
}else{
	echo "<h3>Sepetiniz boş!</h3>";
	}
?>
</div>

<div style="clear:both;"></div>

<div class="message_box" style="margin:10px 0px;">
<?php echo $status; ?>
</div>
<br/><br/>
</div>
</body>
</html>