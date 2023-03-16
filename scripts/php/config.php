<?php
    /* Database credentials. Assuming you are running MySQL
    server with default setting (user 'root' with no password) */
    define('DB_SERVER', 'fdb1029.awardspace.net');
    define('DB_USERNAME', '4240987_epwilhe');
    define('DB_PASSWORD', 'Kipper9000');
    define('DB_NAME', 'users');
    
    /* Attempt to connect to MySQL database */
    $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
    
    // Check connection
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
?>