
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post" enctype="multipart/form-data">
    <input type="text" name="name">
    <input type="file" name="img">
    <input type="submit" name="send">
</form>

</body>
</html>

<?php
$data=$_POST['name'];
$file=$_FILES['img'];
mkdir("include/images/".$data);
$extention=explode(".",$file['name']);
$format=end($extention);
$rename="product".rand().".".$format;
$from=$file['tmp_name'];
$to="include/images/".$data."/".$rename;
move_uploaded_file($from,$to);


?>