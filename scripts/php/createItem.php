<?php
	if(isset($_GET['title'])) {
		$title = ($_GET['title']);
  	}

    if(isset($_GET['desc'])) {
		$desc = ($_GET['desc']);
	}

    //if(isset($_GET['uid'])) {
	//	$uid = ($_GET[uid]);
	//}

    if(isset($_GET['location'])) {
		$location = ($_GET['location']);
	}

    //if(isset($_GET['picture'])) {
	//	$pic = ($_GET['picture']);
	//}

	if(isset($_GET['price'])) {
		$price = ($_GET[price]);
	}

	$uid = 00000000001;
	$pic = "testing";

	@require_once 'DBconnect.php';

	if(! $conn ) {
		die('Could not connect: ' . mysqli_error());
	}

	echo 'Connected successfully';

	$sql = "INSERT INTO My_ProductInfo (ProductTitle, ProductDescription, UserID, lLcation, ProductPicture, ProductPrice)
	VALUES ('$title, $desc, $uid, $location, $picture, $price)";

	if (mysqli_query($conn, $sql)) {
	    echo "New listing created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	mysqli_close($conn);
?>