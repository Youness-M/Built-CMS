<?php
function uploader($data,$img,$foldername){

    $file=$_FILES[$img];
    if (!file_exists($foldername)){

        mkdir("../include/images/".$foldername);

    }
    $extention=explode(".",$file['name']);
    $format=end($extention);
    $rename="image".rand().".".$format;
    $from=$file['tmp_name'];
    $to="../include/images/".$foldername."/".$rename;

    move_uploaded_file($from,$to);

    return $to;
}