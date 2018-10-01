<?php
function editsetting($data){
    $connect=config();
    $sql="UPDATE settings SET title='$data[title]',logo='$data[logo]',description='$data[description]',copright='$data[copright]',facebook='$data[facebook]',insta='$data[insta]',tel='$data[tel]',fax='$data[fax]',address='$data[address]',email='$data[email]',map='$data[map]',aboutus='$data[aboutus]'";
    $row=mysqli_query($connect,$sql);

}

function showeditsetting(){

    $connect=config();
    $sql="SELECT * FROM settings";
    $row=mysqli_query($connect,$sql);
    $res=mysqli_fetch_assoc($row);

    return $res;
}