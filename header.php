
<?php

include "config.php";


if(empty($_SESSION['user']))
{
	echo '<script>window.location="index";</script>';

}

$qrs2 = "SELECT * FROM student WHERE regno='".$_SESSION['user']."' LIMIT 1";
$ru2 = mysqli_query($con,$qrs2);
$getRowAssocms2 = mysqli_fetch_assoc($ru2);
$name = $getRowAssocms2['name'];
$dob = $getRowAssocms2['dob'];
$mobile = $getRowAssocms2['mobile'];
$email = $getRowAssocms2['email'];
$address = $getRowAssocms2['address'];
$qualification = $getRowAssocms2['qualification'];
$cource = $getRowAssocms2['cource'];
$fee = $getRowAssocms2['fee'];
$sem1 = $getRowAssocms2['sem1'];
$sem2 = $getRowAssocms2['sem2'];
$sem3 = $getRowAssocms2['sem3'];
$sem4 = $getRowAssocms2['sem4'];
$sem5 = $getRowAssocms2['sem5'];
$sem6 = $getRowAssocms2['sem6'];


?>


<!doctype html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="theme-color" content="#000000">
  
    
    <link rel="stylesheet" href="assets/css/style.css">
   
</head>

<body>

    <!-- loader -->
    <div id="loader">
        <div class="spinner-border text-primary" role="status"></div>
    </div>
    <!-- * loader -->

    
    
<script>
try {
 var verName = Website2APK.getAppVersionName();
}
catch(err) {
  window.location="404.php";
}

      	
	
</script>
