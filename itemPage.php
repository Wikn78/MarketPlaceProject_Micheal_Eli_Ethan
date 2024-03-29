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

    <script>

      function loadHomePage(){

        window.location.href = "./homescreen.html";

      }
    </script>

    <div class="header-item">
        <div class="header">
            <h1 onclick="loadHomePage()">Halleium</h1>
            <div class="search">
                        
                    <form action="#">
                        <input type="text" placeholder=" Search Items " name="itemSearch">
                    </form>
                
            </div>
    
            <div class="dropdown">
                <button class="dropbtn"><div class="profileimage"> <img src="./images/hamburgermenu_512.png" alt="menuIcon" style="width:50px"></div>
                    
                </button>
                
                <div class="dropdown-content">
                        <a href="#">Edit Profile</a>
                        <a href="./createItem.html">List an Item</a>
                        <a href="#">Your Listings</a>
                        
                    </div>
            </div>
        </div>
    </div>

    <!--body-->
    <?php
    require('./scripts/php/Configure.php');

    $id = $_REQUEST["id"];

    if($id !== "") {

        $sql = "SELECT Title, PDescription, PLocation, PicturePath, Price FROM ProductInformation WHERE ProductID = " . $id;
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {

            while($row = mysqli_fetch_assoc($result)) {
                echo
                "<div class=\"container\" onclick=\"loadPage('" . $id . "')\">
                    <div class=\"listing-grid\"> 
                    <h2>".$row['Title']."</h2>
                        <div class=\"sub-container\">
                            <div id=\"item1\">
                                <img src=\"".$row['PicturePath']."\">
                            </div>
                            <div id=\"item2\">
                                <img class=\"user-img\" src=\"./images/Avatars/Default.png\"> <!--Users need to have at least a file path section to be able to do this-->
                                <h3 class=\"user-name\">Test</h3><br> <!--This needs to get the name from the shared uid-->
                                <h2 class=\"item-price\">Price: ".$row['Price']."</h2><br>
                                <p class=\"item-locale\">Location: ".$row['PLocation']."</p><br>
                                <p class=\"item-desc\">Description: ".$row['PDescription']."</p><br>

                                <form action=\"./scripts/php/BuyItem.php?id=$id\" method=\"post\"><button type=\"submit\" onclick=\"\">Buy Now</button></form>
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