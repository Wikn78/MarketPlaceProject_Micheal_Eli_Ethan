<?php
	header( "refresh:5; url=../../homescreen.html" ); // set this to go to the new listing eventually

	if(isset($_GET['title'])) {
		$title = ($_GET['title']);
  	}

    if(isset($_GET['desc'])) {
		$desc = ($_GET['desc']);
	}

	// get user id from active session
    // if(isset($_GET['uid'])) {
	//	$uid = ($_GET[uid]);
	// }

    if(isset($_GET['location'])) {
		$location = ($_GET['location']);
	}

    if(isset($_GET['pic'])) {
	 	$pic = ($_GET['pic']);
	}

	if(isset($_GET['price'])) {
		$price = ($_GET['price']);
	}

	$uid = 9999;
	$pic = ("./images/imageIcons/"+"image.jpg");

	@require_once 'Configure.php';

	if(! $conn ) {
		die('Could not connect: ' . mysqli_error());
	}

	$sql = "INSERT INTO ProductInformation (UserID, Title, PDescription, PLocation, PicturePath, Price)
	VALUES ($uid, '$title', '$desc', '$location', '$pic', $price);";

	if (mysqli_query($conn, $sql)) {
	    echo "New listing created successfully! You will be redirected soon...";
	} else {
	    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	mysqli_close($conn);
?>