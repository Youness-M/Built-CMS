<?php

function addmessage($data){

    var_dump($data);

    $connect=config();
    $sql="INSERT INTO contacts (name,email,subject,text) VALUES ('$data[name]','$data[email]','$data[subject]','$data[text]')";
    $res=mysqli_query($connect,$sql);
}



function listmessagesadmin(){

    $connect=config();
    $sql="SELECT * FROM contacts";
    $row=mysqli_query($connect,$sql);
    while ($res=mysqli_fetch_assoc($row)){
        $result[]=$res;
    }

    return $result;
}


function deletemessages($id){

    $connection=config();
    $sql="DELETE FROM contacts WHERE id='$id'";
    $row=mysqli_query($connection,$sql);
}

function showmessages($id){

    $connect=config();
    $sql="SELECT * FROM contacts WHERE id='$id'";
    $row=mysqli_query($connect,$sql);
    $res=mysqli_fetch_assoc($row);
    return $res;

}
//
function replymessages($data,$id){

    $connect=config();
    $sql="UPDATE contacts SET reply='$data[reply]' WHERE id='$id' ";
    $res=mysqli_query($connect,$sql);
}
//
//
//function listmenudefault(){
//
//    $connect=config();
//    $sql="SELECT * FROM menu_tbl WHERE status='1' AND chid='0' ORDER BY sort ASC";
//    $row=mysqli_query($connect,$sql);
//    while ($res=mysqli_fetch_assoc($row)){
//
//        $result[]=$res;
//    }
//
//    return $result;
//}
//
//function listsubmenudefault($id){
//
//    $connect=config();
//    $sql="SELECT * FROM menu_tbl WHERE status='1' AND chid='$id' ORDER BY sort ASC";
//    $row=mysqli_query($connect,$sql);
//    if (mysqli_num_rows($row)>0){
//        while ($res=mysqli_fetch_assoc($row)){
//
//            $result[]=$res;
//        }
//        return $result;
//    }
//
//
//}