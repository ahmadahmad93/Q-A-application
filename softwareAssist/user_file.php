<?php
include './header.php';
if (!isset($_GET['id'])) {
    header("Location: index.php");
} else {
    $id = (int) $_GET['id'];
    $sql = "SELECT * FROM users_personal where reg_id=$id";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($query);
}
?>
<section>
    <div class="row">
        <div class="container" style="margin-top: 20px;margin-bottom: 20px;">

            <div class="col-lg-4" style="float: right">
                <?php
                include './sidebar.php';
                ?>   
            </div>
            <div class="col-lg-8" style="float: right">
                <!-- Nav tabs -->
                <div class="card">
                    <div class="row">
                        <div class="col-lg-10 col-lg-offset-1">
                            <h3 class="page-header text-right">معلومات شخصية</h3>
                            <div class="col-lg-4" style="float: right">
                                <img src="uploads/<?php echo $row['img'];?>" class="img-rounded img-responsive img-thumbnail" />
                            </div>
                            <div class="col-lg-8" style="float: right">
                                <ul class="list-group">
                                    <h4 class="list-group-item text-right" dir="rtl">الاسم الثلاثي: <?php echo $row['name'];?></h4>
                                    <h4 class="list-group-item text-right" dir="rtl">الموقع الالكتروني: <?php echo $row['website'];?></h4>
                                    <h4 class="list-group-item text-right" dir="rtl">العنوان: <?php echo $row['address'];?></h4>
                                    <h4 class="list-group-item text-right" dir="rtl">نبذة مختصرة: <?php echo $row['about'];?></h4>
                                </ul>  
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-10 col-lg-offset-1">
                            <br/>
                            <br/>
                            <div class="row">
                                <div class="col-lg-4" style="float: right">
                                    <div class="alert alert-info">
                                        <h2 class="text-center">عدد المقالات</h2>
                                        <hr/>
                                        <h2 class="text-center"><?php get_user_articales_num($id);?></h2>
                                    </div>
                                </div>
                                <div class="col-lg-4" style="float: right">
                                    <div class="alert alert-warning">
                                        <h2 class="text-center">عدد الاسئلة</h2>
                                        <hr/>
                                        <h2 class="text-center"><?php get_user_questions_num($id);?></h2>
                                    </div>
                                </div>
                                <div class="col-lg-4" style="float: right">
                                    <div class="alert alert-success">
                                        <h2 class="text-center">عدد الاجوبة</h2>
                                        <hr/>
                                        <h2 class="text-center"><?php get_user_ans_num($id);?></h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <h2 class="page-header text-primary text-right">ارشيف المقالات</h2>
                                <table class="table table-condensed table-responsive" dir="rtl">
                                    <tr class="bg-primary">
                                        <th class="text-center">عنوان المقال</th>
                                        <th class="text-center">تاريخ النشر</th>
                                        <th class="text-center">استعراض</th>
                                    </tr>
                                    <?php get_user_articals($id);?>
                                </table>
                            </div>
                            <div class="row">
                                <h2 class="page-header text-info text-right">ارشيف الاسئلة</h2>
                                <table class="table table-condensed table-responsive" dir="rtl">
                                    <tr class="bg-info">
                                        <th class="text-center">عنوان السؤال</th>
                                        <th class="text-center">تاريخ النشر</th>
                                        <th class="text-center">استعراض</th>
                                    </tr>
                                    <?php get_user_questions($id);?>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</section>
<?php
include './footer.php';
?>     