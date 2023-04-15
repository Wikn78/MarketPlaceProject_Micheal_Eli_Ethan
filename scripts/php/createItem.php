<?php
	header( "refresh:5; url=../../homescreen.html" ); // set this to go to the new listing eventually

	if(isset($_POST['title'])) {
		$title = (string)($_POST['title']);
  	}

    if(isset($_POST['desc'])) {
		$desc = (string)($_POST['desc']);
	}

	// get user id from active session
    // if(isset($_POST['uid'])) {
	//	$uid = ($_POST[uid]);
	// }

    if(isset($_POST['location'])) {
		$location = (string)($_POST['location']);
	}

    if(isset($_POST['pic'])) {
	 	$pic = ($_POST['pic']);
	}

	if(isset($_POST['price'])) {
		$price = floatval($_POST[price]);
	}

	$uid = 9999;
	$pic = "./images/imageIcons/test.jpg"; // this will eventually save the location properly

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