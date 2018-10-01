<?php
  $id=$_GET['id'];
  $data=showmessages($id);

  if (isset($_POST['btn'])){
      $newdata=$_POST['frm'];

      replymessages($newdata,$id);
      header("location:dashbord.php?m=contact&p=list");
  }
?>

<h1 class="pageLables">ویرایش محصول</h1>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2" >
        <section class="panel">
            <header class="panel-heading">
                ویرایش محصول وب سایت
            </header>
            <div class="panel-body">
                <form role="form" method="post">

                    <div class="form-group">
                        <label for="exampleInputEmail1">نام فرستنده</label>
                        <input type="text" name="frm[name]" class="form-control" value="<?php echo $data['name']; ?>">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">موضوع ایمیل</label>
                        <input type="text" name="frm[subject]" class="form-control" value="<?php echo $data['subject']; ?>">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">توضیحات</label>
                        <textarea type="text" name="frm[text]" class="form-control ckeditor" rows="8"><?php echo $data['text']; ?></textarea>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">پاسخ</label>
                        <textarea type="text" name="frm[reply]" class="form-control ckeditor" rows="8"><?php echo $data['reply']; ?></textarea>
                    </div>

                    <button type="submit" name="btn" class="btn btn-info">ارسال</button>
                </form>

            </div>
        </section>
    </div>
</div>
