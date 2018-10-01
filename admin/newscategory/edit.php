<?php
  $id=$_GET['id'];
  $data=newscategoryshowedit($id);
//  var_dump($data);die;

  if (isset($_POST['btn'])){
      $newdata=$_POST['frm'];
      newscategoryedit($newdata,$id);
      header("location:dashbord.php?m=newscategory&p=list");
  }
?>

<h1 class="pageLables">ویرایش دسته بندی</h1>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2" >
        <section class="panel">
            <header class="panel-heading">
                ویرایش دسته بندی اخبار
            </header>
            <div class="panel-body">
                <form role="form" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">عنوان خبر</label>
                        <input type="text" name="frm[title]" class="form-control" value="<?php echo $data['title']; ?>">
                    </div>


                    <button type="submit" name="btn" class="btn btn-info">افزودن</button>
                </form>

            </div>
        </section>
    </div>
</div>
