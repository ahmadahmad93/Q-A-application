<?php
include 'header.php';
$sql = "SELECT * FROM articals order by time DESC";
$query = mysqli_query($conn, $sql);
?>
<section class="container" style="background-color: #FFF;">
      <div class="row">
          <h1 class="page-header text-right">&nbsp;&nbsp;&nbsp;
              مقالات الموقع
          </h1>
          <div class="col-lg-12" style="float: right;">
              <table class="table table-responsive table-bordered" dir="rtl">
                  <tr class="bg-primary">
                      <th class="text-center">اسم المقال</th>
                      <th class="text-center">اسم الكاتب</th>
                      <th class="text-center">تفاصيل</th>
                      <th class="text-center">عمليات</th>
                  </tr>
                  <?php
                    while($row=  mysqli_fetch_assoc($query)){
                        echo "<tr><td class='text-center'>".$row['title']."</td><td class='text-center'>".get_user_name($row['usr_id'])."</td><td class='text-center'><a href='a_det.php?id=".$row['id']."' class='btn btn-default'>التفاصيل</a></td><td class='text-center'><a href='a_del.php?id=".$row['id']."' class='btn btn-default'>حذف</a></td></tr>";
                    }
                  ?>
                 
              </table>
          </div>
      </div>
  </section>
    </body>
</html>