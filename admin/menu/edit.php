<?php
  $id=$_GET['id'];
  $data=showedit($id);

  if (isset($_POST['btn'])){
      $newdata=$_POST['frm'];
      editmenu($newdata,$id);
      header("location:dashbord.php?m=menu&p=list");
  }
?>

<h1 class="pageLables">ویرایش منو</h1>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2" >
        <section class="panel">
            <header class="panel-heading">
                ویرایش منو وب سایت
            </header>
            <div class="panel-body">
                <form role="form" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">عنوان منو</label>
                        <input type="text" name="frm[title]" class="form-control" value="<?php echo $data['title']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">آدرس منو</label>
                        <input type="text" name="frm[url]" class="form-control"  value="<?php echo $data['url']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">سرگروه</label>
                        <select class="form-control input-lg m-bot15" name="frm[parent]">

                            <option value="0">سرگروه</option>;
                            <?php
                            $data_submenu=submenu();
                            foreach ($data_submenu as $val){

                               echo "<option value =$val[id] ";

                               if ($data['chid']==$val['id']){
                               echo "selected";
                               }

                               echo ">$val[title]</option >";
                             }
                            ?>
                        </select>
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
