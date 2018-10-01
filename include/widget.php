<?php

function addwidget($data,$file,$foldername){
    $connect=config();
    include_once "uploader.php";
    $img=uploader($data,$file,$foldername);
    $sql="INSERT INTO widget (title,text,status,img) VALUES ('$data[title]','$data[text]','$data[status]','$img')";
    $res=mysqli_query($connect,$sql);
}

function listwidgetadmin(){

    $connect=config();
    $sql="SELECT * FROM widget";
    $row=mysqli_query($connect,$sql);
    while ($res=mysqli_fetch_assoc($row)){
        $result[]=$res;
    }

    return $result;
}

function deletewidget($id){

    $connection=config();
    $sql="DELETE FROM widget WHERE id='$id'";
    $row=mysqli_query($connection,$sql);
}

function showeditwidget($id){

    $connect=config();
    $sql="SELECT * FROM widget WHERE id='$id'";
    $row=mysqli_query($connect,$sql);
    $res=mysqli_fetch_assoc($row);
    return $res;

}

function editwidget($data,$id,$file){

    $extract=explode('/',$data[0]);
    $total=count($extract);
    $foldername=$extract[$total-2];

    if ($_FILES[$file]['name']!=''){
        include_once "uploader.php";
        $img=uploader($data,$file,$foldername);
    }else{
        $img=$data[0];
    }
    $connect=config();
    $sql="UPDATE widget SET title='$data[title]',text='$data[text]',status='$data[status]',img='$img' WHERE id='$id' ";
    $res=mysqli_query($connect,$sql);
}

function listwidgetdefault(){

    $connect=config();
    $sql="SELECT * FROM widget WHERE status='1'";
    $row=mysqli_query($connect,$sql);
    while ($res=mysqli_fetch_assoc($row)){

        $result[]=$res;
    }

    return $result;
}