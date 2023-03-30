<?php
@require_once './scripts/php/DBconnect.php';

if(! $conn ) {
    die('Could not connect: ' . mysqli_error());
}

echo 'Connected successfully';
// Need the other pieces of data
$sql = "SELECT ProductTitle, ProductDescription, UserID, lLcation, ProductPicture, ProductPrice
FROM My_ProductInfo";

if (mysqli_query($conn, $sql)) {
    echo "New listing created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>