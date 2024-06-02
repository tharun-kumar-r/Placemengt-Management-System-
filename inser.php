<?php
include "config.php";


$uid = $_SESSION['user'];


if(!empty($_GET['msg']))
{
    
    $msg = mysqli_real_escape_string($con, $_GET['msg']);

    $sql = "INSERT INTO msg(ipid,msg,date)VALUES('$uid','$msg','$today')";

$con->query($sql) === TRUE;

echo "ok";
}

?>