<?php
	include_once("header.php");
?>
	

	<hr>
	<br>

	<div class="slideshow-container" id="main-banner">
		<div class="mySlides fade">
    		<img src="picture/banner1.jpg" style="width:100%">
    	</div>

    	<div class="mySlides fade">
    		<img src="picture/banner2.jpg" style="width:100%">
    	</div>

    	<div class="mySlides fade">
    		<img src="picture/banner3.jpg" style="width:100%">
    	</div>

    	<div class="mySlides fade">
    		<img src="picture/banner4.jpg" style="width:100%">
    	</div>

    	<!-- The dots/circles -->
		<div class="dot-bar" style="text-align:center">
		  <span class="dot" onclick="currentSlide(1)"></span>
		  <span class="dot" onclick="currentSlide(2)"></span>
		  <span class="dot" onclick="currentSlide(3)"></span>
		  <span class="dot" onclick="currentSlide(4)"></span>
		</div>
	</div>

	<div class="section-title">
		<h2> Featured Categories</h2>
	</div>

	<!-- feature categories -->
	<div class="categories">
		<div class="row">
			<div class="col-3">
				<a href="furniture.php"><img src="picture/cat-1.jpg"></a>
			</div>
			<div class="col-3">
				<a href="storage.php"><img src="picture/cat-4.jpg"></a>
			</div>
			<div class="col-3">
				<a href="stationary.php"><img src="picture/cat-6.jpg"></a>
			</div>

		</div>
		
	</div>

	<div class="section-title">
		<h2> Popular Products</h2>
	</div>
	
	<div class = "products">
		<div class="row">
			<div class="col-4">
				<a href="#">
					<img class="product-img" src="picture/prod-110.jpg">
					<h4>BILLY</h4>
					<p>Bookcase, white80x28x106 cmn</p>
					<h4>$69</h4>
				</a>
			</div>
			<div class="col-4">
				<a href="#">
					<img class="product-img" src="picture/prod-130.jpg">
					<h4>LAGKAPTEN</h4>
					<p>Desk and storage combination, and swivel chair black-brown/black</p>
					<h4>$59.6</h4>
				</a>
			</div>
			<div class="col-4">
				<a href="#">
					<img class="product-img" src="picture/prod-210.jpg">
					<h4>KOPPLA</h4>
					<p>6-way socket with switch, white 1.5 m</p>
					<h4>$25.9</h4>

				</a>
			</div>
			<div class="col-4">
				<a href="#">
					<img class="product-img" src="picture/prod-410.jpg">
					<h4>NOJIG</h4>
					<p>Organiser, plastic/white20x25x10 cm</p>
					<h4>$1.5</h4>
				</a>
			</div>
			<div class="col-4">
				<a href="#">
					<img class="product-img" src="picture/prod-220.jpg">
					<h4>SYMFONISK</h4>
					<p>WiFi bookshelf speaker, white</p>
					<h4>$179</h4>
					<small>More variants</small>
					<div class="variants">
						<a href="#"><img src=""></a>
						<a href="#"><img src=""></a>
						<a href="#"><img src=""></a>
					</div>

				</a>
			</div>


			
		</div>
		
	</div>


<?php
	include_once("footer.php");
?>	

