<?php
function addproducts($data,$file,$foldername){
    include_once "uploader.php";
    $img=uploader($data,$file,$foldername);
    $connect=config();
    $sql="INSERT INTO products (title,text,procat,status,img) VALUES ('$data[title]','$data[text]','$data[procat]','$data[status]','$img')";
    $res=mysqli_query($connect,$sql);
}

function subproducts(){

    $connect=config();
    $sql="SELECT * FROM product_cat";
    $row=mysqli_query($connect,$sql);
    while ($res=mysqli_fetch_assoc($row)){
        $result[]=$res;
    }

    return $result;
}


function listproductsadmin(){

    $connect=config();
    $sql="SELECT * FROM products";
    $row=mysqli_query($connect,$sql);
    while ($res=mysqli_fetch_assoc($row)){
        $result[]=$res;
    }

    return $result;
}
function selectparentproducts($procat){

    $connect = config();
    $sql = "SELECT * FROM product_cat WHERE id='$procat'";
    $row = mysqli_query($connect, $sql);
    $res = mysqli_fetch_assoc($row);
    $result=$res['title'];

    return $result;
}


function deleteproducts($id){

    $connection=config();
    $sql="DELETE FROM products WHERE id='$id'";
    $row=mysqli_query($connection,$sql);
}

function showeditproduct($id){

    $connect=config();
    $sql="SELECT * FROM products WHERE id='$id'";
    $row=mysqli_query($connect,$sql);
    $res=mysqli_fetch_assoc($row);
    return $res;

}

function editproducts($data,$id,$file){

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
    $sql="UPDATE products SET title='$data[title]',text='$data[text]',status='$data[status]',img='$img',procat='$data[procat]' WHERE id='$id' ";
    $res=mysqli_query($connect,$sql);
}


function listprodefault(){

    $connect=config();
    $sql="SELECT * FROM products WHERE status='1'";
    $row=mysqli_query($connect,$sql);
    while ($res=mysqli_fetch_assoc($row)){

        $result[]=$res;
    }

    return $result;
}
