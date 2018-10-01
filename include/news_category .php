<?php
function addcategorynews($data){
//    var_dump($data);die;
    $connect=config();
    $sql="INSERT INTO newscategory (title) VALUES ('$data[title]')";
    $row=mysqli_query($connect,$sql);


}

function listnewscategoryadmin(){
    $connect=config();
    $sql="SELECT * FROM newscategory";
    $row=mysqli_query($connect,$sql);
    while ($res=mysqli_fetch_assoc($row)){

        $result[]=$res;
    }

    return $result;
}

function deletenewscategory($id){
    $connect=config();
    $sql="DELETE FROM newscategory WHERE id='$id'";
    $row=mysqli_query($connect,$sql);

}

function  newscategoryshowedit($id){
    $connect=config();
    $sql="SELECT * FROM newscategory WHERE id='$id'";
    $row=mysqli_query($connect,$sql);
    $res=mysqli_fetch_assoc($row);

    return $res;

}

function newscategoryedit($data,$id){
//        var_dump($data);
//        echo $id; die;
    $connect=config();
    $sql="UPDATE newscategory SET title='$data[title]' WHERE id='$id'";
    $row=mysqli_query($connect,$sql);


}