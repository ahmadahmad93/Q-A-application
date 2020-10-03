<?php
include './header.php';
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
                        <h3 class="page-header text-right">مقال جديد</h3>
                        <form action="db/insert_new_artical.php" method="post" enctype="multipart/form-data">
                            <div>
                                <label class="pull-right">عنوان المقال</label>
                                <input type="text" name="title" class="form-control text-right" placeholder="عنوان المقال" required />
                            </div>
                            <div>
                                <label class="pull-right">صورة المقال</label>
                                <input type="file" name="image" class="form-control" accept="image/*" required/>
                            </div>
                            <div>
                                <label class="pull-right">نص المقال</label>
                                <textarea class="form-control text-right" name="details" rows="25" required></textarea>
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