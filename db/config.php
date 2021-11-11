<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

// RUNNING SERVER ON LOCAL
define('DB_SERVER', '127.0.0.1');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'fitness');

// RUNNING SERVER LIVE
// define('DB_SERVER', 'us-cdbr-east-02.cleardb.com');
// define('DB_USERNAME', 'bbb03609868fec');
// define('DB_PASSWORD', 'f0c1c2a9');
// define('DB_NAME', 'heroku_97fcbdc288f858b');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}else{
    echo "";
}
?>

