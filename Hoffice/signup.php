<?php
	
	$conn = mysqli_connect("localhost", "f32ee", "f32ee","f32ee");

	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	$javaPriceUpdate = $_GET['javaPriceUpdate'];
	$laitSinglePriceUpdate = $_GET['laitSinglePriceUpdate'];
	$laitSDoublePriceUpdate = $_GET['laitDoublePriceUpdate'];
	$icedCappuccinoSinglePriceUpdate = $_GET['icedCappuccinoSinglePriceUpdate'];
	$icedCappuccinoDoublePriceUpdate = $_GET['icedCappuccinoDoublePriceUpdate'];

	for($i = 1; $i < 6; $i++) {
		if ($i == 1 && isset($javaPriceUpdate)) {
			//UPDATE menu SET price = 2.00 WHERE productID = 1;
			$sql = "UPDATE f32ee.menu SET price = $javaPriceUpdate WHERE productID =$i";
			$result = $conn->query($sql);
		}elseif ($i == 2 && isset($laitSinglePriceUpdate)) {
			$sql = "UPDATE f32ee.menu SET price = $laitSinglePriceUpdate WHERE productID =$i";
			$result = $conn->query($sql);
		}elseif ($i == 3 && isset($laitSDoublePriceUpdate)) {
			$sql = "UPDATE f32ee.menu SET price = $laitSDoublePriceUpdate WHERE productID =$i";
			$result = $conn->query($sql);
		}elseif ($i == 4 && isset($icedCappuccinoSinglePriceUpdate)) {
			$sql = "UPDATE f32ee.menu SET price = $icedCappuccinoSinglePriceUpdate WHERE productID =$i";
			$result = $conn->query($sql);
		}elseif ($i == 5 && isset($icedCappuccinoDoublePriceUpdate)) {
			$sql = "UPDATE f32ee.menu SET price = $icedCappuccinoDoublePriceUpdate WHERE productID =$i";
			$result = $conn->query($sql);
		}
	}

	mysqli_close($conn);
	header("refresh:0;url=admin.php");

?> 