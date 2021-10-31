<?php
	include "connect.php";
	session_start();
	if (isset($_POST['submit'])) {
		if (empty($_POST['loginUsername']) || empty ($_POST['loginPassword'])) {
		echo "All records to be filled in"; //make sure all required entries are filled
		exit;}
	}

	$username = $_POST['loginUsername'];
	$password = $_POST['loginPassword'];
	
	// echo ("$username" . "<br />". "$password" . "<br />");
	//md5 means it's going to encrypt the password
	$password = md5($password);
	$query = 'select * from f32ee.user '
				."where username='$username' "
				." and u_password='$password'";
	// echo "<br>" .$query. "<br>";
	
	$result = $conn->query($query);
	// echo "<br>" .$result->num_rows. "<br>";
	if ($result->num_rows >0)
	{
		// if they are in the database register the user id
		$_SESSION['valid_user'] = $username; 
		// echo "success";   
	}
	mysqli_close($conn);
	// // header("refresh:0;url=index.html");
	header("location:index.php");

	
?> 

