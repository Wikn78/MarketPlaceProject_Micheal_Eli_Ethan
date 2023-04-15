<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

/*
define('DB_SERVER', '127.0.0.1');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'classproject');
*/


define('DB_SERVER', 'fdb29.awardspace.net');
define('DB_USERNAME', '4240997_michaelh');
define('DB_PASSWORD', 'CodingRocks88');
define('DB_NAME', '4240997_michaelh');
 
/* Attempt to connect to MySQL database */
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>