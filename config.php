
<?php

$host = "localhost:3306"; /* Host name */
$user = "rajsofto_edu"; /* User */
$password = "RiRve54u4gMp"; /* Password */
$dbname = "rajsofto_educms"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
session_start();

// Check connection
if (!$con) {
 die("Connection failed: " . mysqli_connect_error());
}



  
date_default_timezone_set('Asia/Kolkata');
$today = date("F j, Y, g:i a");   

session_start();




?>
