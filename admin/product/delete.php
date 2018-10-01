<?php
$id=$_GET['id'];
deleteproduct($id);
header("location:dashbord.php?m=product&p=list");
?>