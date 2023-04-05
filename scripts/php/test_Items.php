<?php

    require('DBConnect.php');
    
    $sql = "SELECT ProductID, ProductTitle, ProductDescription, ProductPicture, ProductPrice FROM ProductInformation";
	$result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $connRowCount = 0;
        while($row = mysqli_fetch_assoc($result)) {

            
            $image = imagecreatefromstring($row['ProductPicture']);
            if ($image !== false) {
                // Save the image to file
                imagepng($image, '../../images/imageIcons/image' . $connRowCount . '.png');
                imagedestroy($image);
            } else {
                echo "Error: Could not create image from blob.";
            }

            echo 
            "
                <div class=\"grid-container-2\" onclick=\"loadPage('" . $row['ProductID'] . "')\">
                
                    <header class=\"item-title\">". $row['ProductTitle']. "</header>
                    <h2 class=\"item-price\">". $row['ProductPrice']. "</h2>
                    <img class=\"item-image\" src=\"" . $row['ProductPicture']. "\" alt=\"productPic\"> 
                    <p class=\"item-desc\">". $row['ProductDescription']. "</p>

                </div>
            
            
            
            ";
            $connRowCount = $connRowCount + 1;
        }
    
    }

    mysqli_close($conn);


?>