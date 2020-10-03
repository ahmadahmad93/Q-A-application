<?php
include 'header.php';
?>
<section class="container" style="background-color: #FFF;">
      <div class="row">
          <h1 class="page-header text-right">&nbsp;&nbsp;&nbsp;
              احصائيات الموقع
          </h1>        <div class="col-lg-12">
          <div class="col-lg-3 bg-info" style="float: right;">
            <h1 class="text-center">عدد المستخدمين</h1>
            <hr/>
            <h1 class="text-center"><?php echo get_num_users_all(); ?></h1>
          </div>
            <div class="col-lg-3 bg-warning" style="float: right;">
            <h1 class="text-center">عدد المقالات</h1>
            <hr/>
            <h1 class="text-center"><?php echo get_num_articals_all(); ?></h1>
          </div>
            <div class="col-lg-3 bg-danger" style="float: right;">
            <h1 class="text-center">عدد الاسئلة</h1>
            <hr/>
            <h1 class="text-center"><?php echo get_num_questions_all(); ?></h1>
          </div>
            <div class="col-lg-3 bg-success" style="float: right;">
            <h1 class="text-center">عدد الاجوبة</h1>
            <hr/>
            <h1 class="text-center"><?php echo get_num_answers_all(); ?></h1>
          </div>
            
        </div>

      </div>
      <h1 class="page-header text-center">
             احداث جديدة
          </h1>
      <div class="row">
          <div class="col-lg-6" style="float: right;">
              <table class="table table-responsive table-bordered" dir="rtl">
                  <tr class="bg-primary">
                      <th colspan="3" class="text-center">اخر المستخدمين المسجلين</th>
                  </tr>
                 <?php
                 get_last_5_users();
                 ?>
              </table>
          </div>
          <div class="col-lg-6" style="float: right;">
              <table class="table table-responsive table-bordered" dir="rtl">
                  <tr class="bg-warning">
                      <th colspan="3" class="text-center">اخر المقالات </th>
                  </tr>
                  <?php
                 get_last_5_articals();
                 ?>
              </table>
          </div>
          <div class="col-lg-6" style="float: right;">
              <table class="table table-responsive table-bordered" dir="rtl">
                  <tr class="bg-danger">
                      <th colspan="3" class="text-center">احدث الاسئلة</th>
                  </tr>
                  <?php
                 get_last_5_questions();
                 ?>
              </table>
          </div>
          <div class="col-lg-6" style="float: right;">
              <table class="table table-responsive table-bordered" dir="rtl">
                  <tr class="bg-success">
                      <th colspan="3" class="text-center">اخر الاجوبة </th>
                  </tr>
                  <?php
                 get_last_5_answers();
                 ?>
              </table>
          </div>
      </div>
  </section>
    </body>
</html>