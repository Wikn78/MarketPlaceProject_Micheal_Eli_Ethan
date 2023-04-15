<?php

    require('Configure.php');
    
    $sql = "SELECT ProductID, Title, PDescription, PicturePath, Price FROM ProductInformation";
	$result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $connRowCount = 0;
        while($row = mysqli_fetch_assoc($result)) {

            
            $image = imagecreatefromstring($row['PicturePath']);
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
                
                    <header class=\"item-title\">". $row['Title']. "</header>
                    <h2 class=\"item-price\">". $row['Price']. "</h2>
                    <img class=\"item-image\" src=\"" . $row['PicturePath']. "\" alt=\"productPic\"> 
                    <p class=\"item-desc\">". $row['PDescription']. "</p>

                </div>
            
            
            
            ";
            $connRowCount = $connRowCount + 1;
        }
    
    }

    mysqli_close($conn);


?>