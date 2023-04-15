<?php

    @require_once 'Configure.php';

    if (isset($_FILES["fileToUpload"]) && $_FILES["fileToUpload"]["error"] == 0) {
        $filename = $_FILES["fileToUpload"]["name"];
        $png_data = file_get_contents($_FILES["fileToUpload"]["tmp_name"]);
        
        // Check that the database connection is established correctly
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        // Prepare UPDATE statement
        $stmt = $conn->prepare("UPDATE ProductInformation SET ProductPicture = ?");
        
        $stmt->bind_param("b", $png_data);
        
        // Execute statement
        if ($stmt->execute()) {
            echo "PNG image uploaded successfully!";
        } else {
            echo "Error uploading PNG image!";
        }
    
    } 
    else {
        echo "Error uploading PNG image!";
    }

?>