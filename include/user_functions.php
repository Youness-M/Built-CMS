<?php
include_once 'functions.php';
function user_login($data){

    $connection=config();
    $sql="SELECT * FROM admin_tbl WHERE username='$data[username]'";
    $row=mysqli_query($connection,$sql);
    $res=mysqli_fetch_assoc($row);
    if (sha1($data['password']) == $res['password']){

        session_start();
        $_SESSION['username']=$res['name'];
        header("location:dashbord.php");
//        session_destroy();
//
    }else{

        header("location:index.php?error=incorrectnamepass");
    }


}

//    var_dump($res);
