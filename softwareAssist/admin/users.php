<?php
include 'header.php';
$sql = "SELECT * FROM users order by time DESC";
$query = mysqli_query($conn, $sql);
?>
<section class="container" style="background-color: #FFF;">
      <div class="row">
          <h1 class="page-header text-right">&nbsp;&nbsp;&nbsp;
              مستخدمي الموقع
          </h1>
          <div class="col-lg-12" style="float: right;">
              <table class="table table-responsive table-bordered" dir="rtl">
                  <tr class="bg-primary">
                      <th class="text-center">اسم المستخدم</th>
                      <th class="text-center">تاريخ التسجيل</th>
                      <th class="text-center">تفاصيل</th>
                      <th class="text-center">عمليات</th>
                  </tr>
                  <?php
                    while($row=  mysqli_fetch_assoc($query)){
                        echo "<tr><td class='text-center'>".$row['mail']."</td><td class='text-center'>".$row['time']."</td><td class='text-center'><a href='u_det.php?id=".$row['id']."' class='btn btn-default'>التفاصيل</a></td><td class='text-center'><a href='u_del.php?id=".$row['id']."' class='btn btn-default'>حذف</a></td></tr>";
                    }
                  ?>
                  
              </table>
          </div>
      </div>
  </section>
    </body>
</html>