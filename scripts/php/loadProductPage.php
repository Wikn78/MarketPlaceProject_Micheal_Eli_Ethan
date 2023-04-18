<!DOCTYPE html>
<html lang="en">
<header>
    <title>Halleium - [Insert Page Name]</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="head.html" rel="import"/>
    <link rel="stylesheet" href="../../css/homescreen.css">
    <link rel="stylesheet" href="../../css/itemPage.css">
</header>
<body>
    <!--header-->

    <!--body-->
    <div class="grid-container-1">
        <div class="products-grid">
        <?php
    require('Configure.php');

    $id = $_REQUEST["id"];

    if($id !== ""){

        $sql = "SELECT ProductTitle, ProductDescription, ProductPicture, Location, ProductPrice FROM ProductInformation WHERE ProductID = " . $id;
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {

            while($row = mysqli_fetch_assoc($result)) {
    
                echo
                "<div class=\"grid-container-2\" onclick=\"loadPage('" . $id . "')\">
                    <header class=\"item-title\">". $row['ProductTitle']. "</header>
                    <h2 class=\"item-price\">". $row['ProductPrice']. "</h2>
                    
                    <p class=\"item-desc\">". $row['ProductDescription']. "</p>
                    <p class=\"item-desc\">". $row['Location']. "</p>
                </div>";
            }
        }
    }
?>
        </div>
        <div class="comments-grid">

        </div>
        <div class="footer-grid"><p>Copyright Halleium</p></div>
    </div>

</body>
</html>

