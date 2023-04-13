<?php
	header( "refresh:5; url=../../homescreen.html" ); // set this to go to the new listing eventually

	// pull active session and apply it to a UserID variable

	if(isset($_GET['title'])) {
		$title = ($_GET['title']);
  	}

    if(isset($_GET['desc'])) {
		$desc = ($_GET['desc']);
	}

	// get user id from active session
    // if(isset($_GET['uid'])) {
	//	$uid = ($_GET[uid]);
	//}

    if(isset($_GET['location'])) {
		$location = ($_GET['location']);
	}

    if(isset($_GET['picture'])) {
		$pic = ($_GET['picture']);
	}

	if(isset($_GET['price'])) {
		$price = ($_GET[price]);
	}

	$uid = 99999999999;
	$pic = "testing";

	@require_once 'Configure.php';

	if(! $conn ) {
		die('Could not connect: ' . mysqli_error());
	}

	$sql = "INSERT INTO My_ProductInfo (ProductTitle, ProductDescription, UserID, lLcation, ProductPicture, ProductPrice)
	VALUES ('$title, $desc, $uid, $location, $picture, $price)";

	if (mysqli_query($conn, $sql)) {
	    echo "New listing created successfully! You will be redirected soon...";
	} else {
	    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	mysqli_close($conn);
?>