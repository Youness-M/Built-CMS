<?php
  $id=$_GET['id'];
  $data=showeditproduct($id);

  if (isset($_POST['btn'])){
      $newdata=$_POST['frm'];
      $newdata[]=$data['img'];
      editproducts($newdata,$id,'img');
      header("location:dashbord.php?m=products&p=list");
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
                <form role="form" method="post" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="exampleInputEmail1">نام محصول</label>
                        <input type="text" name="frm[title]" class="form-control" value="<?php echo $data['title']; ?>">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">توضیحات محصول</label>
                        <textarea id="editor1" type="text" name="frm[text]" class="form-control ckeditor" rows="8"><?php echo $data['text']; ?></textarea>
                    </div>
                    <script>
                        CKEDITOR.replace( 'editor1' );
                    </script>

                    <div class="form-group">
                        <label for="exampleInputPassword1">گروه محصول</label>
                        <select class="form-control input-lg m-bot15" name="frm[procat]">

                            <?php
                            $data_subproducts=subproducts();
                            foreach ($data_subproducts as $val){

                               echo "<option value =$val[id] ";

                               if ($data['procat']==$val['id']){

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
                        <table>
                            <tr>
                                <td>
                                    <label for="exampleInputPassword1"> ویرایش تصویر</label>
                                    <input type="file" name="img">
                                </td>
                                <td>
                                    <img  src="<?php echo $data['img']; ?>" width="100px">
                                </td>
                            </tr>
                        </table>


                    </div>
                    <button type="submit" name="btn" class="btn btn-info">ویرایش</button>
                </form>

            </div>
        </section>
    </div>
</div>
