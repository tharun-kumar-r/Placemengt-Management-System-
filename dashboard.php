<?php 
include "header.php";


if(isset($_POST['save']))
{
    
    $key = strtolower($_POST['text']);
    
    if($key == 'help' or $key == 'chat' )
    {
       echo "<script>window.location='chat';</script>";

    }elseif($key == 'account' or $key == 'marks card' )
    {
         echo "<script>window.location='myprofile';</script>";
    }
    elseif($key == 'placement' or $key == 'job' or $key == 'jobs' )
    {
         echo "<script>window.location='placement';</script>";
    }
    else
    {
        echo "<script>alert('Nothing Found');</script>";
    }
    
    
    
}

?>

<!-- App Header -->
<div class="appHeader bg-primary scrolled">
        <div class="left">
            <a href="#" class="headerButton" data-toggle="modal" data-target="#sidebarPanel">
                <ion-icon name="menu-outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle">
        GOVERNMENT POLYTECHNIC
        </div>
        <div class="right">
            <a href="javascript:;" class="headerButton toggle-searchbox">
                <ion-icon name="search-outline"></ion-icon>
            </a>
        </div>
    </div>
    <!-- * App Header -->

    <!-- Search Component -->
    <div id="search" class="appHeader">
        <form name="search" method="POST" class="search-form">
            <div class="form-group searchbox">
                <input id="1" name="text" type="text" class="form-control" placeholder="Search...">
                <i class="input-icon">
                    <ion-icon name="search-outline"></ion-icon>
                </i>
               <input type="submit" name="save" value="search" style="display:none">
            </div>
        </form>
    </div>
    <!-- * Search Component -->




    <!-- App Capsule -->
    <div id="appCapsule">

        <div class="header-large-title">
            <h1 class="title">Hi, <?php echo $name; ?> </h1>
            <h4 class="subtitle">Please Select the Subject of Categories</h4>
        </div>

        <div class="section full mt-3 mb-3">
            <div class="carousel-multiple owl-carousel owl-theme">

                <div class="item" onclick="window.location='myprofile';">
                    <div class="card">
                        <img src="assets/img/std.PNG" class="card-img-top" alt="image">
                        <div class="card-body pt-2">
                            <h4 class="mb-0">My Educational Details </h4>
                        </div>
                    </div>
                </div>

                <div class="item"  onclick="window.location='about';">
                    <div class="card">
                        <img src="assets/img/clg.PNG" class="card-img-top" alt="image">
                        <div class="card-body pt-2">
                            <h4 class="mb-0">About My <br>Collage</h4>
                        </div>
                    </div>
                </div>
                
                <div class="item" onclick="window.location='placement';">
                    <div class="card">
                        <img src="assets/img/placements.PNG" class="card-img-top" alt="image">
                        <div class="card-body pt-2">
                            <h4 class="mb-0">Off Campus Placements</h4>
                        </div>
                    </div>
                </div>
                <div class="item" onclick="window.location='chat';">
                    <div class="card">
                        <img src="assets/img/help.PNG" class="card-img-top" alt="image">
                        <div class="card-body pt-2">
                            <h4 class="mb-0">My Collage Helpdesk</h4>
                        </div>
                    </div>
                </div>
               
            

            </div>

        </div>



     
        <div class="section mt-3 mb-3" >
            <div class="card" style="
    border-top: 3px solid var(--primary);
">
                <div class="card-body d-flex justify-content-between align-items-end">
                    <div>
                        <h6 class="card-subtitle">Collage</h6>
                        <h5 class="card-title mb-0 d-flex align-items-center justify-content-between">
                         Notice Board 
                        </h5>
                    </div>
                    <div class="custom-control custom-switch">
                   <font size="5"> <b><ion-icon name="bookmark-outline" role="img" class="md hydrated" aria-label="layers outline"></ion-icon>
                    </b></font>
                    </div>

                 

                </div>



                <div>
              
                <?php                    
                    
                    $sql = "SELECT * FROM `note` ORDER BY id DESC";
                    $result = $con->query($sql);
                    
                                            
                    if ($result->num_rows > 0) {
                        // output data of each row
                        
                        
                        
                        while($row = $result->fetch_assoc()) {
                            
                            $text = $row['text'];
                            $link = $row['link'];
							
	?>
	




                <table width="100%" style="border: 1px solid #e9e9e9;">
                   <tbody><tr><td width="68%" style="padding: 11px;">
                  <h5>
                  <marquee style="margin-left: 10px;color: var(--danger);"><?php echo $text; ?></marquee>

                  </h5></td><td width="13%" style="text-align: center;">
                  <font size="5"> <a href="<?php echo $link; ?>"><ion-icon name="globe-outline" role="img" class="md hydrated" aria-label="layers outline"></ion-icon>
                    </a></font>
                  </td></tr></tbody>
                </table>

                 
<?php
                        }}
?>
                
                 
                 

                </div>



            </div>

         
           

        </div>







        <div  class="section mt-3 mb-3">
            <div class="card" style="
    padding: 20px;    border-top: 3px solid var(--primary);
">
               
                    
                <h6 class="card-subtitle">Jobs</h6><br>
                        <h5 class="card-title" style="
    margin-top: -22px;
">
                        New Job opportunity 
                        </h5>

                        <?php                    
                    
                    $sql = "SELECT * FROM `offcamp` ORDER BY id DESC LIMIT 4";
                    $result = $con->query($sql);
                    
                                            
                    if ($result->num_rows > 0) {
                        // output data of each row
                        
                        
                        
                        while($row = $result->fetch_assoc()) {
                            
                            $id = $row['id'];
                            $photo = $row['photo'];
                            $title = $row['title'];
                            $dsc = base64_decode($row['description']);
                            $link = $row['link'];
                            $date = $row['date'];
							
	?>
	
<br>
                        <div class="card bg-light mb-2" onclick="window.location='job?id=<?php echo $id; ?>'">
                <div class="card-header"><?php echo $date; ?></div>
                <div class="card-body">
                    <h5 style="color: var(--blue);" class="card-title"><?php echo $title; ?></h5>
                    <p class="card-text"><?php echo substr_replace($dsc, "...", 60); ?></p>
                </div>
            </div>
          


<?php
                        }}

?>
  </div>
        </div>











    </div>



    <!-- * App Capsule -->



    <!-- welcome notification  -->
    <!-- <div id="notification-welcome" class="notification-box">
        <div class="notification-dialog android-style">
            <div class="notification-header">
                <div class="in">
                    <img src="assets/img/icon/72x72.png" alt="image" class="imaged w24">
                    <strong>Mobilekit</strong>
                    <span>just now</span>
                </div>
                <a href="#" class="close-button">
                    <ion-icon name="close"></ion-icon>
                </a>
            </div>
            <div class="notification-content">
                <div class="in">
                    <h3 class="subtitle">Welcome to Mobilekit</h3>
                    <div class="text">
                        Mobilekit is a PWA ready Mobile UI Kit Template.
                        Great way to start your mobile websites and pwa projects.
                    </div>
                </div>
            </div>
        </div>
    </div> -->











  <!-- App Bottom Menu -->
  <div class="appBottomMenu">
        <a href="dashboard" class="item active">
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


   <?php 
include "foot.php";


?>

    <script>
        setTimeout(() => {
            notification('notification-welcome', 1000);
        }, 2000);
    </script>
