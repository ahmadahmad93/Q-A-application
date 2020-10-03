            <div class="col-lg-12 bg-info">
                <h3 class="page-header text-right">احصائيات</h3>
                <ul class="list-group">
                    <h4 class="list-group-item text-right"><span class="badge pull-left"><?php echo get_num_users_all();?></span>عدد اعضاء الموقع</h4>
                    <h4 class="list-group-item text-right">عدد اسئلة الموقع<span class="badge pull-left"><?php echo get_num_questions_all();?></span></h4>
                    <h4 class="list-group-item text-right">عدد اجابات الموقع<span class="badge pull-left"><?php echo get_num_answers_all();?></span></h4>
                    <h4 class="list-group-item text-right">عدد مقالات الموقع<span class="badge pull-left"><?php echo get_num_articals_all();?></span></h4>
                </ul>
            </div>
<?php
if(!isset($_SESSION['id'])){
?>
            <div class="col-lg-12 bg-primary">
                <h3 class="page-header text-right">تسجيل الدخول</h3>
                <form action="login.php" method="post">
                    <div>
                        <label></label>
                        <input type="email" name="mail" class="form-control text-right" placeholder="اسم المستخدم" />
                    </div>
                    <div>
                        <label></label>
                        <input type="password" name="pwd" class="form-control text-right" placeholder="كلمة المرور" />
                    </div>
                    <div>
                        <br/>
                        <input type="submit" name="add" class="btn btn-block btn-danger" value="تسجيل الدخول" />
                        <br/>
                    </div>
                </form>
            </div>
<?php
}
?>