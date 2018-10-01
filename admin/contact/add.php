<?php
    if(isset($_POST['btn'])){
        $data=$_POST['frm'];
        $foldername="product-".rand();
        addproducts($data,'img',$foldername);
    }
?>

<h1 class="pageLables">افزودن محصول جدید</h1>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2" >
        <section class="panel">
            <header class="panel-heading">
                افزودن محصول جدید به وب سایت
            </header>
            <div class="panel-body">
                <form role="form" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1">نام محصول</label>
                        <input type="text" name="frm[title]" class="form-control" placeholder=" نام محصول را وارد کنید">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">توضیخات محصول</label>
                        <textarea  name="frm[text]" class="form-control ckeditor" rows="8" placeholder="توضیحات مربوط به محصول"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">گروه مربوط به محصول</label>
                        <select class="form-control input-lg m-bot15" name="frm[procat]">

                            <?php
                            $data_subproducts=subproducts();
                            foreach ($data_subproducts as $val) {

                               echo "<option value =$val[id] >$val[title]</option >";
                             }
                            ?>
                        </select>
                    </div>
                    <label for="exampleInputPassword1">وضعیت نمایش</label>
                    <div class="radio">
                        <label>
                            <input type="radio" name="frm[status]" id="optionsRadios1" value="1">فعال
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="frm[status]" id="optionsRadios1" value="0"> غیر فعال
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">آپلود عکس محصول </label>
                        <input type="file" name="img" value="Upload">
                    </div>

                    <button type="submit" name="btn" class="btn btn-info">افزودن</button>
                </form>

            </div>
        </section>
    </div>
</div>
