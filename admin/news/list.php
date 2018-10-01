    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                                لیست خبر های اصلی وب سایت
                </header>
                <table class="table table-striped table-advance table-hover">
                    <thead>
                    <tr>
                        <th>عنوان خیر </th>
                        <th> گروه خبر</th>
                        <th> عکس </th>
                        <th> وضعیت </th>
                        <th>ویرایش</th>
                        <th>حذف</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                        $listnews=listnewsadmin();
                        foreach ($listnews as $val):
                    ?>
                    <tr>
                        <td><?php echo $val['title']; ?></td>
                        <td><?php

                                $parent=selectparentnews($val['procat']);
                                echo $parent;

                            ?>
                        </td>
                        <td><img src="<?php echo $val['img']; ?>"  width="50px"></td>
                        <td>
                            <?php
                            if($val['status']==0){
                                echo "
                                    <span class='btn btn-danger'>غیر فعال</span>
                                ";
                            }
                            else{
                                echo "
                                    <span class='btn btn-success'> فعال</span>
                                ";
                            }
                            ?>
                        </td>
                        <td><a href="dashbord.php?m=news&p=edit&id=<?php echo $val['id']; ?>" class="btn btn-primary btn-xs"><i class="icon-pencil"></i></a></td>
                        <td><a href="dashbord.php?m=news&p=delete&id=<?php echo $val['id']; ?>" class="btn btn-danger btn-xs"><i class="icon-trash "></i></a></td>
                    </tr>
                    <?php
                    endforeach;
                    ?>

                    </tbody>
                </table>
            </section>
        </div>
    </div>
