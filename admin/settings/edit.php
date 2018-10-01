<?php

  $data=showeditsetting();
    if (isset($_POST['btn'])){
        $newdata=$_POST['frm'];

        editsetting($newdata);
        header("location:dashbord.php?m=settings&p=edit");
    }
?>



<h1 class="pageLables">ویرایش </h1>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2" >
        <section class="panel">
            <header class="panel-heading">
                ویرایش تنظیمات وب سایت
            </header>
            <div class="panel-body">
                <form role="form" method="post" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="exampleInputEmail1">لوگوی سایت</label>
                        <input type="text" name="frm[logo]"  value="<?php echo $data['logo']; ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">عنوان سایت</label>
                        <input type="text" name="frm[title]" class="form-control" value="<?php echo $data['title']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">توضیحات</label>
                        <input type="text" name="frm[description]" class="form-control" value="<?php echo $data['description']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">حق کپی رایت</label>
                        <input type="text" name="frm[copright]" class="form-control" value="<?php echo $data['copright']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">فیسبوک</label>
                        <input type="text" name="frm[facebook]" class="form-control" value="<?php echo $data['facebook']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">اینستاگرام</label>
                        <input type="text" name="frm[insta]" class="form-control" value="<?php echo $data['insta']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">تلفن</label>
                        <input type="text" name="frm[tel]" class="form-control" value="<?php echo $data['tel']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">فکس</label>
                        <input type="text" name="frm[fax]" class="form-control" value="<?php echo $data['fax']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">آدرس</label>
                        <input type="text" name="frm[address]" class="form-control" value="<?php echo $data['address']; ?>">
                    </div><div class="form-group">
                        <label for="exampleInputEmail1">ایمیل</label>
                        <input type="text" name="frm[email]" class="form-control" value="<?php echo $data['email']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">نقشه</label>
                        <input type="text" name="frm[map]" class="form-control" value="<?php echo $data['map']; ?>">
                    </div><div class="form-group">
                        <label for="exampleInputEmail1">در مورد ما</label>
                        <input type="text" name="frm[aboutus]" class="form-control" value="<?php echo $data['aboutus']; ?>">
                    </div>





                    <button type="submit" name="btn" class="btn btn-info">ویرایش</button>
                </form>

            </div>
        </section>
    </div>
</div>
