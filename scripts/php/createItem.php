<?php
	header( "refresh:5; url=../../homescreen.html" ); // set this to go to the new listing eventually
	@require_once 'Configure.php';

	if(isset($_GET['title'])) {
		$title = ($_GET['title']);
  	}

    if(isset($_GET['desc'])) {
		$desc = ($_GET['desc']);
	}

	// get user id from active session
    // if(isset($_GET['uid'])) {

	// }
	$uid = 9999;

    if(isset($_GET['location'])) {
		$location = ($_GET['location']);
	}

    if(isset($_FILES['image'])) {
		$dirname = "./images/Products/";    

		$of = $_FILES['image']['name'];
		$ext = pathinfo($of, PATHINFO_EXTENSION);

		$changename3 = time() * 24 * 60;
		$image_name3 = "timage_" . $changename3 . "." . $ext;

		$final_pathdir = $dirname . $image_name3;
		$suc = move_uploaded_file($_FILES['image']['tmp_name'], "../../images/Products/");

		if ($suc > 0) 
		{
			echo "Image uploaded successfully"; 
		} else {
			echo "Error : " . $_FILES['filimg1']['error'];
		}
		$pic = $dirname.$image_name3;
	}

	if(isset($_GET['price'])) {
		$price = ($_GET['price']);
	}

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