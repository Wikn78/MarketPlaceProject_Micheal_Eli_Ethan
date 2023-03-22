<?php
	if(isset($_GET['id'])) {
		$pid = ($_GET[id]);
	}

	if(isset($_GET['iname'])) {
		$pname = ($_GET['iname']);
  	}

	if(isset($_GET['price'])) {
		$uprice = ($_GET[price]);
	}


	//Provide your server and database information below
	$dbhost = 'fdb1029.awardspace.net';
	$dbuser = '4240987_epwilhe';
	$dbpass = 'Kipper9000';
	$dbname = 'Inventory';
	$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

	if(! $conn ) {
		die('Could not connect: ' . mysqli_error());
	}

	echo 'Connected successfully';

	// sql to create table

	$sql = "INSERT INTO My_ProductInfo (ProductName, UnitPrice, CurrentAmount, ReorderAmount)
	VALUES ('$pname', $uprice, $camount, $ramount)";

	if (mysqli_query($conn, $sql)) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	mysqli_close($conn);
?>