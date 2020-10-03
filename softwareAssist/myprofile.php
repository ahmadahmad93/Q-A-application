<?php
session_start();
include './header.php';

$id = (int)$_SESSION['id'];
$sql = "SELECT * FROM users_personal where reg_id=$id";
$query = mysqli_query($conn, $sql);
if (mysqli_num_rows($query) == 1) {
    $exist = TRUE;
    $row = mysqli_fetch_assoc($query);
} else {
    $exist = FALSE;
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
                            <h3 class="page-header text-right">المعلومات الشخصية</h3>
                            <?php if ($exist) {
                                ?>
                                <form action="db/update_user_personal.php?id=<?php echo $row['id']; ?>" method="post" enctype="multipart/form-data">

                                <?php } else { ?>
                                    <form action="db/insert_new_user_personal.php" method="post" enctype="multipart/form-data">

                                    <?php } ?>
                                    <div>
                                        <label class="pull-right">الاسم الثلاثي</label>
                                        <input type="text" name="name" class="form-control text-right"<?php if ($exist) echo "value='".$row['name']."'"; ?> placeholder="الاسم الثلاثي" required/>
                                    </div>

                                    <div>
                                        <label class="pull-right">الموقع الالكتروني</label>
                                        <input type="url" name="web" class="form-control text-right" placeholder="الموقع الالكتروني" <?php if ($exist) echo "value='".$row['website']."'"; ?>/>
                                    </div>

                                    <div>
                                        <label class="pull-right">الصورة الشخصية</label>
                                        <input type="file" name="image" class="form-control text-right"/>
                                    </div>

                                    <div>
                                        <label class="pull-right">العنوان</label>
                                        <input type="text" name="address" class="form-control text-right" placeholder="العنوان" <?php if ($exist) echo "value='".$row['address']."'"; ?>/>
                                    </div>

                                    <div>
                                        <label class="pull-right">نبذة شخصية</label>
                                        <textarea name="about" class="form-control text-right"><?php if ($exist) echo $row['about']; ?></textarea>
                                    </div>
                                    <div>
                                        <br/>
                                        <input type="submit" name="add" id="" class="btn btn-primary" value="تأكيد" />
                                        <br/>
                                        <br/>
                                        <br/>
                                    </div>
                                </form>
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