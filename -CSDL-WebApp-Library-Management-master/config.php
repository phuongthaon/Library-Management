<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'us-cdbr-iron-east-01.cleardb.net');
define('DB_USERNAME', 'b47d7d31f530ec');
define('DB_PASSWORD', '2593df18');
define('DB_NAME', 'heroku_2b7e9ade604dde8');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
