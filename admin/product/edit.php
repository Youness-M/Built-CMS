<?php
  $id=$_GET['id'];
  $data=productshowedit($id);
//  var_dump($data);die;

  if (isset($_POST['btn'])){
      $newdata=$_POST['frm'];
      productedit($newdata,$id);
      header("location:dashbord.php?m=product&p=list");
  }
?>

<h1 class="pageLables">ویرایش محصول</h1>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2" >
        <section class="panel">
            <header class="panel-heading">
                ویرایش محصولات وب سایت
            </header>
            <div class="panel-body">
                <form role="form" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">عنوان محصول</label>
                        <input type="text" name="frm[title]" class="form-control" value="<?php echo $data['title']; ?>">
                    </div>


                    <label for="exampleInputPassword1">وضعیت نمایش</label>
                    <div class="radio">
                        <label>
                            <input type="radio" name="frm[status]" id="optionsRadios1" <?php if ($data['status']==1){ echo"checked";} ?> value="1"  >فعال
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="frm[status]" id="optionsRadios1" <?php if ($data['status']==0){ echo"checked";} ?> value="0"  > غیر فعال
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">ترتیب نمایش</label>
                        <input type="text" name="frm[sort]" class="form-control" value="<?php echo $data['sort']; ?>">
                    </div>
                    <button type="submit" name="btn" class="btn btn-info">افزودن</button>
                </form>

            </div>
        </section>
    </div>
</div>