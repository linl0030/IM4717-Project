<?php
	include_once("header.php");
?>
	<hr>

	<div class="form">
		<div class="login-signup-box">
		<form class="form" id="login" method="post" action="login.php">
			<h1 class="form-title"> Login</h1>
			<div class="form-message form-message-error"></div>
			
			<div class="form-input-group">
				<input type="text" id="loginUsername" name="loginUsername" class="form-input" autofocus placeholder="Username" required="true">
				<div class="form-input-error-message"></div>
			</div>

			<div class="form-input-group">
				<input type="password" id="loginPassword" name="loginPassword" class="form-input" autofocus placeholder="Password" required="true">
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
				<input type="text" id="signupUsername" name="signupUsername" class="form-input" autofocus placeholder="Username" required="true">
				<div class="form-input-error-message"></div>
			</div>
			<div class="form-input-group">
				<input type="text" id="signupEmail" name="signupEmail" class="form-input" autofocus placeholder="Email Address" required="true">
				<div class="form-input-error-message"></div>
			</div>


			<div class="form-input-group">
				<input type="password" id="signupPassword" name="signupPassword" class="form-input" autofocus placeholder="Password" required="true">
				<div class="form-input-error-message"></div>
			</div>
			<div class="form-input-group">
				<input type="password" id="signupConfirm" name="signupConfirm" class="form-input" autofocus placeholder="Confirm Password" required="true">
				<div class="form-input-error-message"></div>
			</div>

			<button class="form-button" type="submit">Sign Up</button>

			<p class="form-text">
				<a href="./" class="form-link" id="linkLogin">Sign In</a>
			</p>

		</form>
		
	</div>
	</div>
	

<?php
	include_once("footer.php");
?>