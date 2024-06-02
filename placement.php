<?php

include "config.php";


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
    <title>Mobilekit Mobile UI Kit</title>
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
            <a href="dashboard" class="headerButton goBack">
                <ion-icon name="chevron-back-outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle">Placements</div>
        <div class="right"></div>
    </div>
    <!-- * App Header -->

    <!-- App Capsule -->
   
    <div id="appCapsule">

    <?php                    
                    
                    $sql = "SELECT * FROM `offcamp` ORDER BY id DESC";
                    $result = $con->query($sql);
                    
                                            
                    if ($result->num_rows > 0) {
                        // output data of each row
                        
                        
                        
                        while($row = $result->fetch_assoc()) {
                            
                            $photo = $row['photo'];
                            $title = $row['title'];
                            $dsc = base64_decode($row['description']);
                            $link = $row['link'];
                            $date = $row['date'];
                            $id = $row['id'];
	?>
	

    <div class="section mt-2" onclick="window.location='job?id=<?php echo $id; ?>'">
            <div class="card">
                <img src="<?php echo $photo; ?>" class="card-img-top" alt="image">
                <div class="card-body">
                    <h6 class="card-subtitle"><?php echo $date; ?></h6>
                    <h5 class="card-title"><?php echo $title; ?></h5>
                    <p class="card-text">
                    <?php echo substr_replace($dsc, "......", 150); ?></p>
                    <p style="text-align: right;"><a href="<?php echo $link; ?>" target="_blank" class="btn btn-primary">Applay Now</a></p>
               
                </div>
            </div>
        </div><br><br>
                    
<?php
                        }}
?>
                    
                    
                    
                    
                    
                    
                    
                    
                    
                



</div>

















  <!-- App Bottom Menu -->
  <div class="appBottomMenu">
        <a href="dashboard" class="item ">
            <div class="col">
                <ion-icon name="home-outline"></ion-icon>
            </div>
        </a>
        <a href="placement" class="item active">
            <div class="col">
                <ion-icon name="podium-outline"></ion-icon>
            </div>
        </a>
        <a href="chat" class="item">
            <div class="col">
                <ion-icon name="chatbubble-ellipses-outline"></ion-icon>
               
            </div>
        </a>
        <a href="about" class="item">
            <div class="col">
                <ion-icon name="newspaper-outline"></ion-icon>
           
            </div>
        </a>
        <a href="myprofile" class="item ">
            <div class="col">
                <ion-icon name="person-outline"></ion-icon>
            </div>
        </a>
        
    </div>
    <!-- * App Bottom Menu -->




                <!-- sidebar buttons -->
                <div class="sidebar-buttons">
                    <a href="javascript:;" class="button">
                        <ion-icon name="person-outline"></ion-icon>
                    </a>
                    <a href="javascript:;" class="button">
                        <ion-icon name="archive-outline"></ion-icon>
                    </a>
                    <a href="javascript:;" class="button">
                        <ion-icon name="settings-outline"></ion-icon>
                    </a>
                    <a href="javascript:;" class="button">
                        <ion-icon name="log-out-outline"></ion-icon>
                    </a>
                </div>
                <!-- * sidebar buttons -->
            </div>
        </div>
    </div>
    <!-- * App Sidebar -->
<?php

include "foot.php";

?>