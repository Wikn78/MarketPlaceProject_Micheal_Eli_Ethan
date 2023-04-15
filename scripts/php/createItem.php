<?php
	header( "refresh:5; url=../../homescreen.html" ); // set this to go to the new listing eventually
	@require_once 'Configure.php';
	$pic = "";

	if(isset($_REQUEST['title'])) {
		$title = ($_REQUEST['title']);
  	}

    if(isset($_REQUEST['desc'])) {
		$desc = ($_REQUEST['desc']);
	}

	// get user id from active session
    // if(isset($_REQUEST['uid'])) {

	// }
	$uid = 9999;

    if(isset($_REQUEST['location'])) {
		$location = ($_REQUEST['location']);
	}

	// this doesn't work
    if(isset($_FILES['image'])) {

		$target_dir = "../../images/Products/";


		$file_extension = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
		$randomish = time() * 24 * 60;
		$new_Name = $randomish . "." . $file_extension;
		$target_file = $target_dir . $new_Name;
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

		// Check if file already exists
		if (file_exists($target_file)) {
			echo "Sorry, file already exists. ";
			$uploadOk = 0;
		}

		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
			echo "Sorry, your file was not uploaded. ";
		// if everything is ok, try to upload file
		} else {
			if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
				echo "The file ". htmlspecialchars(basename( $_FILES["image"]["name"])). " has been uploaded. ";
				$pic = ("./images/Products/".htmlspecialchars(basename( $_FILES["image"]["name"])));

				if(isset($_REQUEST['price'])) {
					$price = ($_REQUEST['price']);
				}
			
				if(! $conn ) {
					die('Could not connect: ' . mysqli_error());
				}
			
				$sql = "INSERT INTO ProductInformation (UserID, Title, PDescription, PLocation, PicturePath, Price)
				VALUES ($uid, '$title', '$desc', '$location', '$target_file', $price);";
			
				if (mysqli_query($conn, $sql)) {
					echo "New listing created successfully! You will be redirected soon...";
				} else {
					echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				}
			} else {
				echo "Sorry, there was an error uploading your file. ";
			}
		}
	}

	mysqli_close($conn);
?>