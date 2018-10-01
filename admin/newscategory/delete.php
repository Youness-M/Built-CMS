<?php
$id=$_GET['id'];
deletenewscategory($id);
header("location:dashbord.php?m=newscategory&p=list");
?>