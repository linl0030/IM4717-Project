<?php
	include_once('connect.php');
	$query="SELECT f32ee.product.p_id, f32ee.product.p_name, f32ee.product.p_price, f32ee.product.p_sht_desc, f32ee.image.img_id,f32ee.image.img_dir 
	FROM f32ee.product
	INNER JOIN image ON f32ee.product.p_id=f32ee.image.p_id
	WHERE f32ee.image.img_id like '1%0'";
	// $query="SELECT * from f32ee.product";
	$result=$conn->query($query);
	$num_result = $result->num_rows;
?>

<html lang="en">

<head>
<title>Hoffice Furniture</title>
<meta charset=“utf-8”>
<link rel="stylesheet" href="css/style.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet"> 
<script type="text/javascript" src="js/mainSlide.js" ></script>
</head>

<body>

	<div class="header">
		<div class="inner-header">

			<div class = "logo-container">
				<h1><a href="index.html">HO<span>FFICE</span></a></h1>
			</div>

 			<div class="nav-bar">
				<ul class="navigation">
					<a href="furniture.php"><li>Furniture</li></a>
					<a href="home-electronics.php"><li>Home Electronics</li></a>
					<a href="lightening.php"><li>Lightening</li></a>
					<a href="organizer.php"><li>Organizer</li></a>
					<a href="storage.php"><li>Storage</li></a>
					<a href="stationary.php"><li>Stationary</li></a>
					<a href="aboutus.html"><li>About Us</li></a>

				</ul>
				<div class = "nav-user-center">
					<a href="login_signup.php"><img class = "icon" src="picture/user.png"></a>
					<a href=""><img class = "icon" src="picture/online-shopping.png"></a>
					<a href=""><img class = "icon" src="picture/search.png"></a>
				</div>
			</div>
		</div>
		
	</div>

	<hr>
	<br>
	<!-- Category Listing -->

	<div class="section-title">
		<h2> Furniture</h2>
	</div>
	
	<div class = "products">
		<div class="row">

			<?php
				for($i=0; $i < $num_result; $i++){
					$row=$result->fetch_assoc();
			?>	
					<div class="col-4">
						<a href="productDetails.html">
							<img class="product-img" src= "<?php echo $row['img_dir']; ?>">
							<h4><?php echo $row['p_name']; ?></h4>
							<small><?php echo $row['p_sht_desc']; ?></small>
							<h4>$<?php echo $row['p_price']; ?></h4>
					
						</a>
					</div>
				<?php
				}
				?>
			
		</div>
		
	</div>

	<br>
	<br>
	<br>

	<footer>
		<small><i>Copyright &copy; 2014 JavaJam Coffee House<br>
		<a href="mailto:lixian@lin.com">lixian@lin.com</a>
		</i></small>
	</footer>

</body>
</html>