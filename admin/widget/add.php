<?php
    if(isset($_POST['btn'])){
        $data=$_POST['frm'];
        $foldername="widget-".rand();
        addwidget($data,'img',$foldername);
    }
?>

<h1 class="pageLables">افزودن ویجت جدید</h1>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2" >
        <section class="panel">
            <header class="panel-heading">
                افزودن ویجت جدید به وب سایت
            </header>
            <div class="panel-body">
                <form role="form" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1">عنوان ویجت</label>
                        <input type="text" name="frm[title]" class="form-control" placeholder=" عنوان ویجت را وارد کنید">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">توضیحات ویجت</label>
                        <textarea id="editor1" name="frm[text]" class="form-control ckeditor" rows="8" placeholder="توضیحات مربوط به ویجت"></textarea>
                    </div>
                    <script>
                        CKEDITOR.replace( 'editor1' );
                    </script>

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
                        <label for="exampleInputEmail1">آپلود عکس مربوطه </label>
                        <input type="file" name="img" value="Upload">
                    </div>

                    <button type="submit" name="btn" class="btn btn-info">افزودن</button>
                </form>

            </div>
        </section>
    </div>
</div>
