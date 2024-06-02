<?php 
include "header.php";

$id = strtoupper($_SESSION['user']);

if(isset($_POST['save']))
{
    $pass = md5($_POST['pass']);
    $len = strlen($_POST['pass']);
    
    if($len < 6 )
    {
        echo "<script>alert('Password Must Be max 6 Char!.')</script>";
    }else{
        
         $sql = "UPDATE student SET pass='$pass' WHERE regno='$id'";
  

if ($con->query($sql) === TRUE) {
    
 
    echo "<script>alert('Password Updated!');</script>";  
}else {
  echo "<script>alert('$id!');</script>";  
}

        
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
        My Profile
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
        <form class="search-form">
            <div class="form-group searchbox">
                <input type="text" class="form-control" placeholder="Search...">
                <i class="input-icon">
                    <ion-icon name="search-outline"></ion-icon>
                </i>
                <a href="javascript:;" class="ml-1 close toggle-searchbox">
                    <ion-icon name="close-circle"></ion-icon>
                </a>
            </div>
        </form>
    </div>
    <!-- * Search Component -->





  <!-- App Capsule -->
  <div id="appCapsule">

<div class="header-large-title">
    <h1 class="title">My Profile</h1>
</div>


<div class="listview-title mt-2">Student Profile </div>
<ul class="listview image-listview" style="margin:21px">
            <li>
                <div class="item">
                    <div class="icon-box bg-primary">
                        <ion-icon name="person-outline" role="img" class="md hydrated" aria-label="image outline"></ion-icon>
                    </div>
                    <div class="in">
                        <div>
                        <font size="1" style="font-size: 11px;font-weight: bold;color: black">Name</font><br>


                        <?php  echo $name; ?></div>
                       
                    </div>
                </div>
            </li>

            <li>
                <div class="item">
                    <div class="icon-box bg-primary">
                        <ion-icon name="calendar-outline" role="img" class="md hydrated" aria-label="videocam outline"></ion-icon>
                    </div>
                    <div class="in">
                        <div>
                        <font size="1" style="font-size: 11px;font-weight: bold;color: black">Date Of birth</font><br>
                  
                        <?php  echo $dob; ?> </div>
                       
                    </div>
                </div>
            </li>


            <li>
                <div class="item">
                    <div class="icon-box bg-primary">
                        <ion-icon name="information-outline" role="img" class="md hydrated" aria-label="videocam outline"></ion-icon>
                    </div>
                    <div class="in">
                        <div>
                        <font size="1" style="font-size: 11px;font-weight: bold;color: black">Register Number</font><br>
                  
                  <?php echo $_SESSION['user']; ?></div>
                       
                    </div>
                </div>
            </li>
            <li>
                <div class="item">
                    <div class="icon-box bg-primary">
                        <ion-icon name="call-outline" role="img" class="md hydrated" aria-label="musical notes outline"></ion-icon>
                    </div>
                    <div class="in">
                        <div>
                        <font size="1" style="font-size: 11px;font-weight: bold;color: black">Mobile Number</font><br>
                  
                        <?php echo $mobile; ?></div>
                    </div>
                </div>
            </li>
            <li>
                <div class="item">
                    <div class="icon-box bg-primary">
                        <ion-icon name="mail-outline" role="img" class="md hydrated" aria-label="musical notes outline"></ion-icon>
                    </div>
                    <div class="in">
                        <div>
                        <font size="1" style="font-size: 11px;font-weight: bold;color: black">Email</font><br>
                  
                        
                        
                        <?php echo $email; ?> </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="item">
                    <div class="icon-box bg-primary">
                        <ion-icon name="location-outline" role="img" class="md hydrated" aria-label="musical notes outline"></ion-icon>
                    </div>
                    <div class="in">
                        <div>
                        <font size="1" style="font-size: 11px;font-weight: bold;color: black">Address</font><br>
                  
                        <?php  echo $address; ?></div>
                    </div>
                </div>
            </li>
            <li>
                <div class="item">
                    <div class="icon-box bg-primary">
                        <ion-icon name="medal-outline" role="img" class="md hydrated" aria-label="musical notes outline"></ion-icon>
                    </div>
                    <div class="in">
                       <div>   
                       <font size="1" style="font-size: 11px;font-weight: bold;color: black">Qualification </font><br>
                        
                        <?php echo $qualification; ?></div>
                    </div>
                </div>
            </li>
            <li>
                <div class="item">
                    <div class="icon-box bg-primary">
                        <ion-icon name="school-outline" role="img" class="md hydrated" aria-label="musical notes outline"></ion-icon>
                    </div>
                    <div class="in">
                       <div>   
                       <font size="1" style="font-size: 11px;font-weight: bold;color: black">Cource </font><br>
                    <?php echo $cource; ?>    
                    </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="item">
                    <div class="icon-box bg-primary">
                        <ion-icon name="wallet-outline" role="img" class="md hydrated" aria-label="musical notes outline"></ion-icon>
                    </div>
                    <div class="in">
                       <div>   
                       <font size="1" style="font-size: 11px;font-weight: bold;color: black">Fee Due</font><br>
                        
                       <?php echo $fee; ?>    </div>
                    </div>
                </div>
            </li>



        </ul>









<div class="listview-title mt-2"> <b>Marks Cards</b></div>

<?php  
              
              if(empty($sem1))
              {

             
             echo "<p style='
             text-align: center;
             padding: 20px;
         '>No Marks cards Found!.</p>";


              }
              else{

              ?>
<ul class="listview image-listview" style="margin:21px">
            <li>
                <div class="item">
                    <div class="icon-box bg-primary">
                        <ion-icon name="document-text-outline" role="img" class="md hydrated" aria-label="image outline"></ion-icon>
                    </div>
                    <div style="display:inline" class="in">
                        <div>
                      
                     

              <?php  
              
              if(!empty($sem1))
              {

             
              ?>
               <div class="wide-block pt-2 pb-2">
               <table width="100%">
               <tr><th>SEMESTER 1</th><td align="right">
               <a href="<?php echo $sem1; ?>" style="font-size: 20px;">
               <div class="col">
                <ion-icon name="download-outline" role="img" class="md hydrated" aria-label="home outline"></ion-icon>
               </div></a></td></tr></table>
               </div>

               <?php 
              }

              if(!empty($sem2))
              {

?>
            
               <div class="wide-block pt-2 pb-2">
               <table width="100%">
               <tr><th>SEMESTER 2</th><td align="right">
               <a href="<?php echo $sem2; ?>" style="font-size: 20px;">
               <div class="col">
                <ion-icon name="download-outline" role="img" class="md hydrated" aria-label="home outline"></ion-icon>
               </div></a></td></tr></table>
               </div>

               <?php 
              }

              if(!empty($sem3))
              {

?>
    



               <div class="wide-block pt-2 pb-2">
               <table width="100%">
               <tr><th>SEMESTER 3</th><td align="right">
               <a href="<?php echo $sem3; ?>" style="font-size: 20px;">
               <div class="col">
                <ion-icon name="download-outline" role="img" class="md hydrated" aria-label="home outline"></ion-icon>
               </div></a></td></tr></table>
               </div>
               <?php 
              }

              if(!empty($sem4))
              {

?>
    
               <div class="wide-block pt-2 pb-2">
               <table width="100%">
               <tr><th>SEMESTER 4</th><td align="right">
               <a href="<?php echo $sem4; ?>" style="font-size: 20px;">
               <div class="col">
                <ion-icon name="download-outline" role="img" class="md hydrated" aria-label="home outline"></ion-icon>
               </div></a></td></tr></table>
               </div>
               <?php 
              }

              if(!empty($sem5))
              {

?>
<div class="wide-block pt-2 pb-2">
               <table width="100%">
               <tr><th>SEMESTER 5</th><td align="right">
               <a href="<?php echo $sem5; ?>" style="font-size: 20px;">
               <div class="col">
                <ion-icon name="download-outline" role="img" class="md hydrated" aria-label="home outline"></ion-icon>
               </div></a></td></tr></table>
               </div>
               <?php 
              }

              if(!empty($sem6))
              {

?>
    <div class="wide-block pt-2 pb-2">
               <table width="100%">
               <tr><th>SEMESTER 6</th><td align="right">
               <a href="<?php echo $sem6; ?>" style="font-size: 20px;">
               <div class="col">
                <ion-icon name="download-outline" role="img" class="md hydrated" aria-label="home outline"></ion-icon>
               </div></a></td></tr></table>
               </div>
               <?php 
              }

            }

?>
    
    

                       </div>
                       
                    </div>
                </div>
            </li>
           
        </ul>


<div class="listview-title mt-2"> <b>Update Password</b></div>
<ul class="listview image-listview" style="margin:21px">
            <li>
                <div class="item">
                   <form method="POST"><br>
                       <input style="padding:4px 11px;width:100%;outline:none;border:0px;margin-bottom:12px" type="text"  name="pass" placeholder="Update Password" required>
                       <button  style="background:#0c53c9;color:white;padding:4px 11px;width:100%;outline:none;border:0px" name="save">Update Password</button>
                   </form>
                    </div>
</li></ul>


<!-- * app footer -->

</div>












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
        <a href="about" class="item">
            <div class="col">
                <ion-icon name="newspaper-outline"></ion-icon>
           
            </div>
        </a>
        <a href="myprofile" class="item active">
            <div class="col">
                <ion-icon name="person-outline"></ion-icon>
            </div>
        </a>
        
    </div>
    <!-- * App Bottom Menu -->








    <?php 
include "foot.php";


?>
