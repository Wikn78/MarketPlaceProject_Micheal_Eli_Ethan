<?php
	header( "refresh:5; url=../../homescreen.html" );
	$target_file;
	require('./Configure.php');
    $id = $_REQUEST["id"];
    $sqlFind = "SELECT PicturePath FROM ProductInformation WHERE ProductID = $id;";
    $sqlDelete = "DELETE FROM ProductInformation WHERE ProductID = $id;";

    mysqli_query($conn, $sqlFind);
    mysqli_query($conn, $sqlDelete);

    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    unlink($row['PicturePath']);

	mysqli_close($conn);
?>