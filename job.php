<?php

include_once "config.php";

$id = $_GET['id'];





$qrs2 = "SELECT * FROM offcamp WHERE id='$id' LIMIT 1";
$ru2 = mysqli_query($con,$qrs2);
$getRowAssocms2 = mysqli_fetch_assoc($ru2);
$photo = $getRowAssocms2['photo'];
$title = $getRowAssocms2['title'];
$dsc = base64_decode($getRowAssocms2['description']);
$link = $getRowAssocms2['link'];
$date = $getRowAssocms2['date'];




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
    <title><?php echo $title; ?></title>
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
        <div class="pageTitle"><?php echo substr_replace($title, "...", 16); ?></div>
        <div class="right"></div>
    </div>
    <!-- * App Header -->

    <!-- App Capsule -->
    <div id="appCapsule">

        <div class="section full">
            <img src="<?php echo $photo; ?>" alt="image" class="imaged square w-100">
        </div>

        <div class="section full mt-2">
            <div class="section-title"><?php echo $title; ?></div>
            <div class="wide-block pt-2 pb-1">
                <p style="
    text-align: justify;
">
           <?php echo $dsc; ?>
<br>
           <p style="text-align: left;"><a href="<?php echo $link; ?>" target="_blank" class="btn btn-primary">Applay Now</a></p>
               
                </p><br><br>
                
            </div>
        </div>

     

    
        </div>



    </div>
    <!-- * App Capsule -->

 

  <!-- App Bottom Menu -->
  <div class="appBottomMenu">
        <a href="dashboard" class="item ">
            <div class="col">
                <ion-icon name="home-outline"></ion-icon>
            </div>
        </a>
        <a href="placement" class="item ">
            <div class="col">
                <ion-icon name="podium-outline"></ion-icon>
            </div>
        </a>
        <a href="chat" class="item">
            <div class="col">
                <ion-icon name="chatbubble-ellipses-outline"></ion-icon>
               
            </div>
        </a>
        <a href="about" class="item ">
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



    <!-- App Sidebar -->
    <div class="modal fade panelbox panelbox-left" id="sidebarPanel" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body p-0">

                    <!-- profile box -->
                    <div class="profileBox">
                        <div class="image-wrapper">
                            <img src="assets/img/sample/avatar/avatar1.jpg" alt="image" class="imaged rounded">
                        </div>
                        <div class="in">
                            <strong>Julian Gruber</strong>
                            <div class="text-muted">
                                <ion-icon name="location"></ion-icon>
                                California
                            </div>
                        </div>
                        <a href="javascript:;" class="close-sidebar-button" data-dismiss="modal">
                            <ion-icon name="close"></ion-icon>
                        </a>
                    </div>
                    <!-- * profile box -->

                    <ul class="listview flush transparent no-line image-listview mt-2">
                        <li>
                            <a href="index.html" class="item">
                                <div class="icon-box bg-primary">
                                    <ion-icon name="home-outline"></ion-icon>
                                </div>
                                <div class="in">
                                    Discover
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="app-components.html" class="item">
                                <div class="icon-box bg-primary">
                                    <ion-icon name="cube-outline"></ion-icon>
                                </div>
                                <div class="in">
                                    Components
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="app-pages.html" class="item">
                                <div class="icon-box bg-primary">
                                    <ion-icon name="layers-outline"></ion-icon>
                                </div>
                                <div class="in">
                                    <div>Pages</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="page-chat.html" class="item">
                                <div class="icon-box bg-primary">
                                    <ion-icon name="chatbubble-ellipses-outline"></ion-icon>
                                </div>
                                <div class="in">
                                    <div>Chat</div>
                                    <span class="badge badge-danger">5</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <div class="item">
                                <div class="icon-box bg-primary">
                                    <ion-icon name="moon-outline"></ion-icon>
                                </div>
                                <div class="in">
                                    <div>Dark Mode</div>
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input dark-mode-switch"
                                            id="darkmodesidebar">
                                        <label class="custom-control-label" for="darkmodesidebar"></label>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>

                    <div class="listview-title mt-2 mb-1">
                        <span>Friends</span>
                    </div>
                    <ul class="listview image-listview flush transparent no-line">
                        <li>
                            <a href="page-chat.html" class="item">
                                <img src="assets/img/sample/avatar/avatar7.jpg" alt="image" class="image">
                                <div class="in">
                                    <div>Sophie Asveld</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="page-chat.html" class="item">
                                <img src="assets/img/sample/avatar/avatar3.jpg" alt="image" class="image">
                                <div class="in">
                                    <div>Sebastian Bennett</div>
                                    <span class="badge badge-danger">6</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="page-chat.html" class="item">
                                <img src="assets/img/sample/avatar/avatar10.jpg" alt="image" class="image">
                                <div class="in">
                                    <div>Beth Murphy</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="page-chat.html" class="item">
                                <img src="assets/img/sample/avatar/avatar2.jpg" alt="image" class="image">
                                <div class="in">
                                    <div>Amelia Cabal</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="page-chat.html" class="item">
                                <img src="assets/img/sample/avatar/avatar5.jpg" alt="image" class="image">
                                <div class="in">
                                    <div>Henry Doe</div>
                                </div>
                            </a>
                        </li>
                    </ul>

                </div>

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