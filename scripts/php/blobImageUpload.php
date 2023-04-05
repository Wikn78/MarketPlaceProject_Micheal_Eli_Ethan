<?php

    require('DBConnect.php');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      
      // Get the Blob data from the request
      
      

      if (isset($_FILES["fileToUpload"]) && $_FILES["fileToUpload"]["error"] == 0) {
        $filename = $_FILES["fileToUpload"]["name"];
        $png_data = file_get_contents($_FILES["fileToUpload"]["tmp_name"]);
    
        // Assuming $mysqli is the MySQLi object representing your database connection
        $stmt = $conn->prepare("UPDATE ProductInformation SET ProductPicture = ?");
        $stmt->bind_param("b", $png_data);
        $stmt->execute();
    
        echo "PNG image uploaded successfully!";
    } else {
        echo "Error uploading PNG image!";
    }

?>