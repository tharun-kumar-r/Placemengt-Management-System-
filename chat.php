<?php
include "config.php";

if(empty($_SESSION['user']))
{
	echo '<script>window.location="index";</script>';

}

$uid = $_SESSION['user'];

$sql = "UPDATE msg SET seen='1' WHERE ipid='$uid'";

$con->query($sql) === TRUE;

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
   
    <meta name="description" content="Mobilekit HTML Mobile UI Kit">
    <meta name="keywords" content="bootstrap 4, mobile template, cordova, phonegap, mobile, html" />
    <link rel="icon" type="image/png" href="assets/img/favicon.png" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/icon/192x192.png">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="manifest" href="__manifest.json">
</head>

<body>

    <!-- loader -->
    <div id="loader">
        <div class="spinner-border text-primary" role="status"></div>
    </div>
    <!-- * loader -->

    <!-- App Header -->
    <div class="appHeader bg-primary text-light">
        <div class="left">
            <a href="dashboard" class="headerButton">
                <ion-icon name="chevron-back-outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle">Chat</div>
        <div class="right">
            
            <a href="tel:7483440063" class="headerButton">
                <ion-icon name="call-outline"></ion-icon>
               
            </a>
        </div>
    </div>
    <!-- * App Header -->

    <!-- App Capsule -->
    <div id="appCapsule">



      

    </div>
    <!-- * App Capsule -->

   

    <!-- chat footer -->
    <div class="chatFooter">
        
          <form onsubmit="return false">
            <div class="form-group boxed">
                <div class="input-wrapper">
                    <input name="msg" type="text" class="form-control" id="text" placeholder="Type a message...">
                    <i class="clear-input">
                        <ion-icon name="close-circle"></ion-icon>
                    </i>
                </div>
            </div>
            <button onclick="
            const dcb = document.getElementById('text').value;
            if(dcb!=='' && dcb!==' ')
           
            { 
                sendmsg(document.getElementById('text').value);
                setTimeout(() => {
    window.scrollBy(0, document.body.scrollHeight);

}, 700);
document.getElementById('text').value= '';
            } " type="submit" name="send" class="btn btn-icon btn-primary rounded">
                <ion-icon name="send"></ion-icon>
            </button>
      
    </div>
        </from>
    <!-- * chat footer -->

 





<?php

include "foot.php";

?>


<script>

$(document).ready(function () {



setTimeout(() => {
    window.scrollBy(0, document.body.scrollHeight);

}, 1000); // hide delay when page load
});

function sendmsg(data){
   
 
    jQuery.ajax({
	url: "inser?msg=" + data ,
	type: "POST",
	success:function(data){
        window.scrollBy(0, document.body.scrollHeight);
              
	},
	error:function (){
        
    }
	});

}

setInterval(
function(){
    
    jQuery.ajax({
	url: "view",
	type: "POST",
	success:function(data){
	
    $("#appCapsule").html(data);

   
         
	},
	error:function (){
        
    }
	});

}, 1000);
</script>

