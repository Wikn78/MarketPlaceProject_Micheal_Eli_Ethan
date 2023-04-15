<?php
@require_once 'Configure.php';

if(! $conn ) {
    die('Could not connect: ' . mysqli_error());
}

echo 'Connected successfully';
// Need the other pieces of data
$sql = "SELECT ProductTitle, ProductDescription, UserID, Location, ProductPicture, ProductPrice
FROM ProductInformation";

if (mysqli_query($conn, $sql)) {
    echo "Connected successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>