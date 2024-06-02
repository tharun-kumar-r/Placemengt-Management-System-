<?php

include "config.php";


if(!empty($_SESSION['user']))
{
	echo '<script>window.location="dashboard";</script>';

}



if(isset($_POST['save']))
{

$regno = $_POST['regno'];
$pass = md5($_POST['pass']);

$sql = mysqli_query($con,"SELECT * FROM student WHERE regno='$regno' and pass='$pass'");
if(mysqli_num_rows($sql)> 0)
{

$_SESSION['user'] = $regno;
echo"<script>window.location='dashboard';</script>";
    
}
else{
       echo "<script>alert('Invalid Login Details!.')</script>";
}
}



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

    <link rel="manifest" href="__manifest.json">
</head>

<body class="bg-white" >

    <!-- loader -->
    <div id="loader">
        <div class="spinner-border text-primary" role="status"></div>
    </div>
    <!-- * loader -->


    <!-- App Capsule -->
    <div id="appCapsule" class="pt-0">

        <div class="login-form mt-1">
            <div class="section">
                <img src="https://img.icons8.com/ios-filled/2x/change-user-male.png" alt="image" style="
    width: 90px;
    margin-top: 139px;
" class="form-image">
            </div>
            <div class="section mt-1">
                <h1>Get started</h1>
                <h4>Enter the Login Destails to Login</h4>
            </div>
            <div class="section mt-1 mb-5">
                <form method="POST">
                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <input type="text" name="regno"  style="text-transform:uppercase" required value="<?php echo $regno; ?>" class="form-control" id="email1" placeholder="Register No">
                            <i class="clear-input">
                                <ion-icon name="close-circle"></ion-icon>
                            </i>
                        </div>
                    </div>

                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <input type="password"  name="pass" class="form-control" id="password1" required placeholder="Password">
                            <i class="clear-input">
                                <ion-icon name="close-circle"></ion-icon>
                            </i>
                        </div>
                    </div>
                    

                   

                    <div class="form-button-group" style="background: transparent;bottom: auto;">
                        <button type="submit" name="save" class="btn btn-primary btn-block btn-lg">Log in</button>
                    </div>

                </form>
            </div>
        </div>


    </div>
    <!-- * App Capsule -->
    <!-- * App Bottom Menu -->

<script>
try {
 var verName = Website2APK.getAppVersionName();
}
catch(err) {
  window.location="404.php";
}

      	
	
</script>

    <!-- ///////////// Js Files ////////////////////  -->
    <!-- Jquery -->
    <script src="assets/js/lib/jquery-3.4.1.min.js"></script>
    <!-- Bootstrap-->
    <script src="assets/js/lib/popper.min.js"></script>
    <script src="assets/js/lib/bootstrap.min.js"></script>
    <!-- Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@5.0.0/dist/ionicons/ionicons.js"></script>
    <!-- Owl Carousel -->
    <script src="assets/js/plugins/owl-carousel/owl.carousel.min.js"></script>
    <!-- jQuery Circle Progress -->
    <script src="assets/js/plugins/jquery-circle-progress/circle-progress.min.js"></script>
    <!-- Base Js File -->
    <script src="assets/js/base.js"></script>


</body>

</html>