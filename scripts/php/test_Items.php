<?php

    require ('DBConnect.php');
    
    $sql = "SELECT ProductID, ProductTitle, UserID FROM ProductInformation";
	$result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {

        while($row = mysqli_fetch_assoc($result)) {

            echo $row["ProductID"] . " " . $row["ProductTitle"] . " " . $row["UserID"];
        
        }
    
    }
?>