<?php
    if(isset($_POST['btn'])){
        $data=$_POST['frm'];
        addcategorynews($data);
    }
?>

<h1 class="pageLables">افزودن دسته بندی خبر</h1>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2" >
        <section class="panel">
            <header class="panel-heading">
                افزودن خبر جدید به وب سایت
            </header>
            <div class="panel-body">
                <form role="form" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">عنوان دسته بندی</label>
                        <input type="text" name="frm[title]" class="form-control" placeholder="عنوان دسته بندی را وارد کنید">
                    </div>

<!--                    <div class="form-group">-->
<!--                        <label for="exampleInputPassword1">تاریخ خبر</label>-->
<!--                        <input type="date" name="frm[date]" class="form-control" placeholder="تاریخ خبر">-->
<!--                    </div>-->
                    <button type="submit" name="btn" class="btn btn-info">افزودن</button>
                </form>

            </div>
        </section>
    </div>
</div>
