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
                        <h3 class="page-header text-right">سؤال جديد</h3>
                        <p class="text-right bg-primary">يمكنك طرح سؤالك هنا.. تأكد من ايصال مشكلتك بشكل سلس و واضح لكي يستطيع الاخرين مساعدتك</p>
                        <form action="db/insert_new_question.php" method="post">
                            <div>
                                <label class="pull-right">عنوان السؤال</label>
                                <input type="text" name="title" class="form-control text-right" placeholder="عنوان السؤال" required/>
                            </div>
                            <div>
                                <label class="pull-right">مجال السؤال</label>
                                <select class="form-control text-right" name="cat" required>
                                    <option value="">اختر المجال</option>
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
                                <textarea class="form-control text-right" rows="5" name="details" required></textarea>
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