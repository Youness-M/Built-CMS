<?php
$id=$_GET['id'];
deletemenu($id);

//if (headers_sent()) {
//    die("Redirect failed. Please click on this link:");
//}
//else{
//    die("ارسال نشد");
//}
header("location:dashbord.php?m=menu&p=list");
?>