
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
                
                <?php

                    session_start();
                    

                    if(!empty($_SESSION))
                    {
                        if($_SESSION["loggedin"])
                        {
                            echo 
                                "<div class='dropdown-content'>

                                    <a href='./editProfile.php'> Edit Profile </a>
                                    <a href='./createItem.html'> List an Item </a>
                                    <a href='./viewListings.php'> Your Listings </a>
                                    <a href='./logout.php'> Log out? </a>
                                    
                                </div>
                                ";
                        }
                    
                    }
                    else
                    {
                        echo 
                        "<div class='dropdown-content'>

                            <a href='./signin.php'> Sign in </a>

                        </div>
                        ";

                    }

                ?>

                
            </div>
        </div>
    </div>


