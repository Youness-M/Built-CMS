<?php
$id=$_GET['id'];
deletemessages($id);

header("location:dashbord.php?m=contact&p=list");
?>