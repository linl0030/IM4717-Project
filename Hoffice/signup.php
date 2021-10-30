<?php
	
	include "connect.php";
	if (isset($_POST['submit'])) {
		if (empty($_POST['signupUsername']) || empty ($_POST['signupEmail'])
			|| empty ($_POST['signupPassword']) || empty ($_POST['signupConfirm']) ) {
		echo "All records to be filled in"; //make sure all required entries are filled
		exit;}
		}
	$username = $_POST['signupUsername'];
	$email = $_POST['signupEmail'];
	$password = $_POST['signupPassword'];
	$password2 = $_POST['signupConfirm'];
	
	// echo ("$username" . "<br />". "$password2" . "<br />");
	if ($password != $password2) {
		echo "Sorry passwords do not match";
		exit;
		}
	$password = md5($password); //md5 means it's going to encrypt the password
	// echo $password;
	$sql = "INSERT INTO f32ee.user (username, u_password,u_email) 
			VALUES ('$username', '$password','$email')";
	//	echo "<br>". $sql. "<br>";
	$result = $conn->query($sql);
	
	if (!$result) 
		echo "Your query failed.";
	else
		echo "Welcome ". $username . ". You are now registered";

	mysqli_close($conn);
	header("refresh:0;url=login_signup.php");

?> 