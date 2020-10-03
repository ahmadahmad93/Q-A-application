<?php
session_start();
include './header.php';

$id = (int)$_SESSION['id'];
$sql = "SELECT * FROM users_personal where reg_id=$id";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($query);
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
                            <br/>
                            <br/>

                            <div class="row">
                                <h2 class="page-header text-primary text-right">ارشيف المقالات</h2>
                                <table class="table table-condensed table-responsive" dir="rtl">
                                    <tr class="bg-primary">
                                        <th class="text-center">عنوان المقال</th>
                                        <th class="text-center">تاريخ النشر</th>
                                        <th class="text-center">عمليات</th>
                                    </tr>
                                    <?php
                                    $sql1 = "SELECT id,title,time from articals where usr_id=$id";
                                    $query1 = mysqli_query($conn, $sql1);
                                    if (mysqli_num_rows($query1) > 0) {
                                        while ($row1 = mysqli_fetch_assoc($query1)) {
                                            echo "<tr>";
                                            echo "<td class='text-center'>" . $row1['title'] . "</td>";
                                            echo "<td class='text-center'>" . $row1['time'] . "</td>";
                                            echo "<td class='text-center'><span class='btn-group'><a class='btn btn-danger' href='db/delete.php?id=" . $row1['id'] . "'>حذف</a><a class='btn btn-success' href='update_artical.php?id=" . $row1['id'] . "'>تعديل</a></span></td>";
                                            echo "</tr>";
                                        }
                                    } else {
                                        echo "<tr><td colspan='3'>لا يوجد نتائج</td></tr>";
                                    }
                                    ?>
                                </table>
                            </div>

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