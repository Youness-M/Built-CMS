    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                                لیست پیام ها
                </header>
                <table class="table table-striped table-advance table-hover">
                    <thead>
                    <tr>
                        <th>نام فرستنده</th>
                        <th> ایمیل</th>
                        <th> موضوع </th>
                        <th>مشاهده و ارسال پاسخ</th>
                        <th>حذف</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                        $listmessages=listmessagesadmin();
                        foreach ($listmessages as $val):
                    ?>
                    <tr>
                        <td><?php echo $val['name']; ?></td>
                        <td><?php echo $val['email']; ?></td>
                        <td><?php echo $val['subject']; ?></td>


                        <td><a href="dashbord.php?m=contact&p=edit&id=<?php echo $val['id']; ?>" class="btn btn-primary btn-xs"><i class="icon-pencil"></i></a></td>
                        <td><a href="dashbord.php?m=contact&p=delete&id=<?php echo $val['id']; ?>" class="btn btn-danger btn-xs"><i class="icon-trash "></i></a></td>
                    </tr>
                    <?php
                    endforeach;
                    ?>

                    </tbody>
                </table>
            </section>
        </div>
    </div>
