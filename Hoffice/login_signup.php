<!doctype html>
<html lang="en">

<head>
<title>Hoffice Homepage</title>
<meta charset=“utf-8”>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/login-signup.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet"> 

<script type="text/javascript" src="js/mainSlide.js" ></script>
<script type="text/javascript" src="js/loginSignup.js" ></script>


</head>

<body>
	<div class="header">
		<div class="inner-header">

			<div class = "logo-container">
				<h1><a href="index.html">HO<span>FFICE</span></a></h1>
			</div>

 			<div class="nav-bar">
				<ul class="navigation">
					<a href="furniture.html"><li>Furniture</li></a>
					<a href="home-electronics.html"><li>Home Electronics</li></a>
					<a href="lightening.html"><li>Lightening</li></a>
					<a href="organizer.html"><li>Organizer</li></a>
					<a href="storage.html"><li>Storage</li></a>
					<a href="stationary.html"><li>Stationary</li></a>
					<a href="aboutus.html"><li>About Us</li></a>

				</ul>
				<div class = "nav-user-center">
					<a href="login.php"><img class = "icon" src="picture/user.png"></a>
					<a href=""><img class = "icon" src="picture/online-shopping.png"></a>
					<a href=""><img class = "icon" src="picture/search.png"></a>
				</div>
			</div>
		</div>
		
	</div>

	<hr>

	<div class="form">
		<div class="login-signup-box">
		<form class="form" id="login" method="post" action="login.php">
			<h1 class="form-title"> Login</h1>
			<div class="form-message form-message-error"></div>
			
			<div class="form-input-group">
				<input type="text" id="loginUsername" class="form-input" autofocus placeholder="Username" required="true">
				<div class="form-input-error-message"></div>
			</div>

			<div class="form-input-group">
				<input type="password" id="loginPassword" class="form-input" autofocus placeholder="Password" required="true">
				<div class="form-input-error-message"></div>
			</div>

			<button class="form-button" type="submit">Log In</button>

			<p class="form-text">
				<a href="./" class="form-link" id="linkSignup">Create account</a>
			</p>

		</form>
		<form class="form form-hidden" id="signup" method="post" action="signup.php">
			<h1 class="form-title">Sign Up</h1>
			<div class="form-message form-message-error"></div>
			
			<div class="form-input-group">
				<input type="text" id="signupUsername" class="form-input" autofocus placeholder="Username" required="true">
				<div class="form-input-error-message"></div>
			</div>
			<div class="form-input-group">
				<input type="text" id="signupEmail" class="form-input" autofocus placeholder="Email Address" required="true">
				<div class="form-input-error-message"></div>
			</div>


			<div class="form-input-group">
				<input type="password" id="signupPassword" class="form-input" autofocus placeholder="Password" required="true">
				<div class="form-input-error-message"></div>
			</div>
			<div class="form-input-group">
				<input type="password" id="signupConfirm" class="form-input" autofocus placeholder="Confirm Password" required="true">
				<div class="form-input-error-message"></div>
			</div>

			<button class="form-button" type="submit">Sign Up</button>

			<p class="form-text">
				<a href="./" class="form-link" id="linkLogin">Sign In</a>
			</p>

		</form>
		
	</div>
	</div>
	

</body>
</html>