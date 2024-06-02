<?php
include "config.php";

$uid = $_SESSION['user'];



          
$sql = "SELECT * FROM `msg` where ipid='".$uid."' ORDER BY id ASC";
$result = $con->query($sql);

                        
if ($result->num_rows > 0) {
    // output data of each row
    
    
    
    while($row = $result->fetch_assoc()) {
        
        
        $ipid = $row['ipid'];
        $admin = $row['admin'];
      
        $msg = $row['msg'];
        $date = $row['date'];
        if($admin=="1")
        {
            $name="ADMIN";
            $class = "message-item";
       ?>
<div class="<?php echo $class; ?>">
<img src="https://img.icons8.com/fluency/2x/user-male-circle.png" alt="avatar" class="avatar">
<div class="content">
<div class="title"><?php echo $name; ?></div>
<div class="bubble">
<?php echo $msg; ?>
</div>
<div class="footer"><?php echo $date; ?></div>
</div>
</div>
<?php
}else{
            $name="Me";
            $class = "message-item user";
    ?>       

<div class="<?php echo $class; ?>" >
<div class="content" style="align-items: inherit;display: grid;">
<div class="bubble">
<?php echo $msg; ?>
</div>
<div class="footer"><?php echo $date; ?></div>
</div>
</div>
<?php 

}
}
}else{
    ?>
<div class="message-divider" style="
    margin: 25px;
    font-size: 18px;
    text-align:center;
">
No messages are available. Once you send message they will appear here.
        </div>
    <?php
}
?>




