<?php
function addproduct($data){
    $connect=config();
    $sql="INSERT INTO product_cat (title,status,sort) VALUES ('$data[title]','$data[status]','$data[sort]')";
    $row=mysqli_query($connect,$sql);


}

function listproductadmin(){
    $connect=config();
    $sql="SELECT * FROM product_cat";
    $row=mysqli_query($connect,$sql);
    while ($res=mysqli_fetch_assoc($row)){

        $result[]=$res;
    }

    return $result;
}

function deleteproduct($id){
    $connect=config();
    $sql="DELETE FROM product_cat WHERE id='$id'";
    $row=mysqli_query($connect,$sql);

}

function  productshowedit($id){
    $connect=config();
    $sql="SELECT * FROM product_cat WHERE id='$id'";
    $row=mysqli_query($connect,$sql);
    $res=mysqli_fetch_assoc($row);

    return $res;

}

function productedit($data,$id){
//        var_dump($data);
//        echo $id; die;
    $connect=config();
    $sql="UPDATE product_cat SET title='$data[title]',status='$data[status]',sort='$data[sort]' WHERE id='$id'";
    $row=mysqli_query($connect,$sql);


}