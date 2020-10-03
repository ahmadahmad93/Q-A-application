<?php
include './header.php';
if (!isset($_GET['id'])) {
    header("Location: myquestions.php");
} else {
    $id = (int) $_GET['id'];
    $sql = "SELECT * FROM questions where id=$id";
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
                        <h3 class="page-header text-right">تعديل سؤال</h3>
                        <form action="db/update_question.php?id=<?php echo $row['id']; ?>" method="post">
                            <div>
                                <label class="pull-right">عنوان السؤال</label>
                                <input type="text" name="title" class="form-control text-right" value="<?php echo $row['title']; ?>" required/>
                            </div>
                            <div>
                                <label class="pull-right">مجال السؤال</label>
                                <select class="form-control text-right" name="cat" required>
                                    <?php echo "<option value='".$row['cat']."'>".$row['cat']."</option>"; ?>
                                    <optgroup label="المجالات ">
                                        <option value="برمجة تطبيقات سطح المكتب">برمجة تطبيقات سطح المكتب</option>
                                        <option value="برمجة تطبيقات الهواتف الذكية">برمجة تطبيقات الهواتف الذكية</option>
                                        <option value="برمجة تطبيقات الويب">برمجة تطبيقات الويب</option>
                                        <option value="تصميم تطبيقات الويب">تصميم تطبيقات الويب</option>
                                        <option value="مجال اخر"> مجال اخر </option>
                                    </optgroup>
                                </select>
                            </div>
                            <div>
                                <label class="pull-right">نص السؤال</label>
                                <textarea class="form-control text-right" rows="5" name="details" required><?php echo $row['details']; ?></textarea>
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