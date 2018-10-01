<?php
$id=$_GET['id'];
deletemessages($id);

//if (headers_sent()) {
//    die("Redirect failed. Please click on this link:");
//}
//else{
//    die("ارسال نشد");
//}
header("location:dashbord.php?m=products&p=list");
?>