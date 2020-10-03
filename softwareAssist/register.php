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
                        <h3 class="page-header text-right">مستخدم جديد</h3>
                        <p class="text-right bg-primary">الرجاء ملء معلومات التسجيل... المعلومات الشخصية يتم ملئها بعد التسجيل</p>
                        <form action="db/insert_new_user.php" method="post">
                            <div>
                                <label class="pull-right">البريد الالكتروني</label>
                                <input type="email" name="mail" class="form-control text-right" placeholder="البريد الالكتروني" required/>
                            </div>
                            
                            <div>
                                <label class="pull-right">كلمة السر</label>
                                <input type="password" name="pwd" class="form-control text-right" placeholder="كلمة السر " required/>
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