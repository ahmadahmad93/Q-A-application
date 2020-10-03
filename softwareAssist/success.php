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
                <div class="col-lg-12">
                    <div class="alert alert-success">
                        <h1 class="text-center">تمت الاضافة بنجاح</h1>
                    </div>
                    <div class="btn-group btn-group-justified">
                        <a href="index.php" class="btn btn-block btn-info">الرئيسية</a>
                        <a href="new_article.php" class="btn btn-block btn-info">مقال جديد</a>
                        <a href="new_question.php" class="btn btn-block btn-info">سؤال جديد</a>
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