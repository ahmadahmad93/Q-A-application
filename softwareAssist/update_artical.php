<?php
include './header.php';
if (!isset($_GET['id'])) {
    header("Location: myarticales.php");
} else {
    $id = (int) $_GET['id'];
    $sql = "SELECT * FROM articals where id=$id";
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
                        <h3 class="page-header text-right">تعديل المقال</h3>
                        <form action="db/update_artical.php?id=<?php echo $row['id']; ?>" method="post" enctype="multipart/form-data">
                            <div>
                                <label class="pull-right">عنوان المقال</label>
                                <input type="text" name="title" class="form-control text-right" value="<?php echo $row['title']; ?>" required />
                            </div>
                            <div>
                                <label class="pull-right">صورة المقال</label>
                                <input type="file" name="image" class="form-control" accept="image/*" required/>
                            </div>
                            <div>
                                <label class="pull-right">نص المقال</label>
                                <textarea class="form-control text-right" name="details" rows="25" required><?php echo $row['details']; ?></textarea>
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
<script>
    
      
</script>
 <?php
include './footer.php';
?>     