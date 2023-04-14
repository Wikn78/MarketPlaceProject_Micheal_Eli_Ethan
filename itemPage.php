<!DOCTYPE html>
<html lang="en">
<header>
    <title>Halleium - Listing</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="head.html" rel="import"/>
    <link rel="stylesheet" href="./css/default.css">
    <link rel="stylesheet" href="./css/itemPage.css">
</header>
<body>
    <!--header-->
    <div class="header-item">
        <div class="header">
            <h1>Halleium</h1>
            <div class="search">
                        
                    <form action="#">
                        <input type="text" placeholder=" Search Items " name="itemSearch">
                    </form>
                
            </div>
    
            <div class="dropdown">
                <button class="dropbtn"><div class="profileimage"> <img src="./images/hamburgermenu_512.png" alt="menuIcon" style="width:50px"></div>
                    
                </button>
                
                <div class="dropdown-content">
                    <!--
                        Most of these should only show up if the user is logged into a session
                        Also this menu needs to show over other menu items.
                    -->
                    <a href="#">Edit Profile</a>
                    <a href="#">Inbox</a>
                    <a href="#">Your Listings</a>
                    <a href="#">Shipping Address</a>
                    <a href="#">Settings</a>
                    <a href="#">Other</a>
                </div>
            </div>
        </div>
    </div>
    <!--body-->
    <?php
    require('./scripts/php/Configure.php');

    $id = $_REQUEST["id"];

    if($id !== "") {

        $sql = "SELECT ProductTitle, ProductDescription, ProductPicture, Location, ProductPrice FROM ProductInformation WHERE ProductID = " . $id;
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {

            while($row = mysqli_fetch_assoc($result)) {
                echo
                "<div class=\"container\" onclick=\"loadPage('" . $id . "')\">
                    <div class=\"listing-grid\"> 
                    <h2>" . $row['ProductTitle'] . "</h2>
                        <div class=\"sub-container\">
                            <div id=\"item1\">
                                <img src=\"./images/imageIcons/image0.png\">
                            </div>
                            <div id=\"item2\">
                                <img class=\"user-img\" src=\"./images/imageIcons/image0.png\">
                                <h3 class=\"user-name\"></h3>
                                <p class=\"item-locale\">". $row['Location']. "</p>
                                <h2 class=\"item-price\">". $row['ProductPrice']. "</h2>
                                <p class=\"item-desc\"></p>
                            </div>
                        </div>
                    </div>
                    <div class=\"comments-grid\">
                        <div id=\"item1\">
                            
                        </div>
                    </div>
                </div>
                <footer><p>Copyright Halleium<p></footer>";
            }
        }
    }
    else {
        echo '<script language="javascript">window.open(\'./404.html\', \'_self\');</script>';
    }?>

</body>
</html>