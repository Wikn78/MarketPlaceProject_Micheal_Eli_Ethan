<?php
    require('DBConnect.php');

    $id = $_REQUEST["id"];

    if($id !== ""){

        $sql = "SELECT ProductTitle, ProductDescription, ProductPicture, Location, ProductPrice FROM ProductInformation WHERE ProductID = " . $id;
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {

            while($row = mysqli_fetch_assoc($result)) {
    
                echo 
                "
                    <div class=\"grid-container-2\" onclick=\"loadPage('" . $id . "')\">
                    
                        <header class=\"item-title\">". $row['ProductTitle']. "</header>
                        <h2 class=\"item-price\">". $row['ProductPrice']. "</h2>
                        <h2 class=\"item-image\">". $row['ProductPicture']. "</h2>
                        <p class=\"item-desc\">". $row['ProductDescription']. "</p>
                        <p class=\"item-desc\">". $row['Location']. "</p>
    
                    </div>
                
                
                
                ";
            
            }
        
        }

    }


?>