<?php

function addmenu($data){
    $connect=config();
    $sql="INSERT INTO menu_tbl (title,url,status,chid,sort) VALUES ('$data[title]','$data[url]','$data[status]','$data[parent]','$data[sort]')";
    $res=mysqli_query($connect,$sql);
}

function submenu(){

    $connect=config();
    $sql="SELECT * FROM menu_tbl WHERE chid='0'";
    $row=mysqli_query($connect,$sql);
    while ($res=mysqli_fetch_assoc($row)){
        $result[]=$res;
    }

    return $result;
}

function listmenuadmin(){

    $connect=config();
    $sql="SELECT * FROM menu_tbl";
    $row=mysqli_query($connect,$sql);
    while ($res=mysqli_fetch_assoc($row)){
        $result[]=$res;
    }

    return $result;
}

function selectparentmenu($chid){

    $connect = config();
    $sql = "SELECT * FROM menu_tbl WHERE id='$chid'";
    $row = mysqli_query($connect, $sql);
    $res = mysqli_fetch_assoc($row);
    $result=$res['title'];

    return $result;
}


function deletemenu($id){

    $connection=config();
    $sql="DELETE FROM menu_tbl WHERE id='$id'";
    $row=mysqli_query($connection,$sql);
}

function showedit($id){

    $connect=config();
    $sql="SELECT * FROM menu_tbl WHERE id='$id'";
    $row=mysqli_query($connect,$sql);
    $res=mysqli_fetch_assoc($row);
    return $res;

}

function editmenu($data,$id){

    $connect=config();
    $sql="UPDATE menu_tbl SET title='$data[title]',url='$data[url]',sort='$data[sort]',status='$data[status]',chid='$data[parent]' WHERE id='$id' ";
    $res=mysqli_query($connect,$sql);
}


function listmenudefault(){

    $connect=config();
    $sql="SELECT * FROM menu_tbl WHERE status='1' AND chid='0' ORDER BY sort ASC";
    $row=mysqli_query($connect,$sql);
    while ($res=mysqli_fetch_assoc($row)){

        $result[]=$res;
    }

    return $result;
}

function listsubmenudefault($id){

    $connect=config();
    $sql="SELECT * FROM menu_tbl WHERE status='1' AND chid='$id' ORDER BY sort ASC";
    $row=mysqli_query($connect,$sql);
    if (mysqli_num_rows($row)>0){
        while ($res=mysqli_fetch_assoc($row)){

            $result[]=$res;
        }
        return $result;
    }


}