<?php
function addnews($data,$file,$foldername){
    $connect=config();
    include_once "uploader.php";
    $img=uploader($data,$file,$foldername);
    $sql="INSERT INTO news (title,text,procat,status,img,date) VALUES ('$data[title]','$data[text]','$data[procat]','$data[status]','$img','$data[date]')";
    $res=mysqli_query($connect,$sql);
}

function subnews(){

    $connect=config();
    $sql="SELECT * FROM newscategory";
    $row=mysqli_query($connect,$sql);
    while ($res=mysqli_fetch_assoc($row)){
        $result[]=$res;
    }

    return $result;
}


function listnewsadmin(){

    $connect=config();
    $sql="SELECT * FROM news";
    $row=mysqli_query($connect,$sql);
    while ($res=mysqli_fetch_assoc($row)){
        $result[]=$res;
    }

    return $result;
}
function selectparentnews($procat){

    $connect = config();
    $sql = "SELECT * FROM newscategory WHERE id='$procat'";
    $row = mysqli_query($connect, $sql);
    $res = mysqli_fetch_assoc($row);
    $result=$res['title'];

    return $result;
}


function deletenews($id){

    $connection=config();
    $sql="DELETE FROM news WHERE id='$id'";
    $row=mysqli_query($connection,$sql);
}

function showeditnews($id){

    $connect=config();
    $sql="SELECT * FROM news WHERE id='$id'";
    $row=mysqli_query($connect,$sql);
    $res=mysqli_fetch_assoc($row);
    return $res;

}

function editnewss($data,$id,$file){

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
    $sql="UPDATE news SET title='$data[title]',text='$data[text]',status='$data[status]',img='$img',procat='$data[procat]',date='$data[date]' WHERE id='$id' ";
    $res=mysqli_query($connect,$sql);
}


function listnewsdefault(){

    $connect=config();
    $sql="SELECT * FROM news WHERE status='1'";
    $row=mysqli_query($connect,$sql);
    while ($res=mysqli_fetch_assoc($row)){

        $result[]=$res;
    }

    return $result;
}
