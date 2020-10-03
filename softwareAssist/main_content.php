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
                <ul class="nav nav-justified nav-tabs" role="tablist">
                    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">اسئلة بدون اجوبة</a></li>
                    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">احدث المقالات</a></li>
                    <li role="presentation" class="active"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">احدث الاسئلة</a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane" id="profile">
                        <div class="row">
                            <?php
                            $sql1 = "select * from questions where id NOT IN(SELECT q_id from answers) LIMIT 5";
                            $query1 = mysqli_query($conn, $sql1);
                            while($row1 = mysqli_fetch_assoc($query1)){
                                echo "<div class='col-lg-12'>";
                                echo "<h3 class='page-header text-right'>".$row1['title']."</h3>";
                                echo "<p class='text-right'>".$row1['details']."</p>";
                                echo "<h4 class='text-right' style='border:1px solid white;padding-bottom: 3px;padding-top: 3px;'>";
                                echo "<span><a class='btn btn-link' href='question.php?id=".$row1['id']."'>التفاصيل</a></span>";
                                echo "<span class='btn btn-default'>عدد الاجابات: ".get_num_answers($row1['id'])." </span>";
                                echo "<span class='btn btn-default'>فئة السؤال: ".$row1['cat']." </span>";
                                echo "<span class='btn btn-default' dir='rtl'>اسم الكاتب : ".get_user_name($row1['usr_id'])." </span>";
                                echo "</h4></div><hr class='col-lg-10 col-lg-offset-1' />";
                            }
                            ?>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="messages">
                        <div class="row">
                            <?php
                            $sql_a = "SELECT * FROM articals order by time DESC LIMIT 5";
                            $query_a = mysqli_query($conn, $sql_a);
                            while ($row_a = mysqli_fetch_assoc($query_a)) {
                                echo "<div class='col-lg-12'>";
                                echo "<div class='col-lg-3' style='float: right;'>";
                                echo "<img src='uploads/" . $row_a['img'] . "' class='img-thumbnail' />";
                                echo "</div>";
                                echo "<div class='col-lg-8' style='float: right;'>";
                                echo "<h4 class='text-right text-info'>" . $row_a['title'] . "</h4>";
                                echo "<p class='text-right text-muted>" . get_user_name($row_a['usr_id']) . "</p>";
                                echo "<p class='text-right'>" . substr($row_a['details'], 0, 200) . "</p>";
                                echo "<span><a class='btn btn-link' href='article.php?id=" . $row_a['id'] . "'>التفاصيل</a></span>";
                                echo "</div>";
                                echo "</div>";
                                echo "<hr class='col-lg-10 col-lg-offset-1' />";
                            }
                            ?>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane active" id="settings">
                        <div class="row">
                            <?php
                            $sql = "select * from questions order by id desc LIMIT 5";
                            $query = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_assoc($query)) {
                                echo "<div class='col-lg-12'>";
                                echo "<h3 class='page-header text-right'>" . $row['title'] . "</h3>";
                                echo "<p class='text-right'>" . $row['details'] . "</p>";
                                echo "<h4 class='text-right' style='border:1px solid white;padding-bottom: 3px;padding-top: 3px;'>";
                                echo "<span><a class='btn btn-link' href='question.php?id=" . $row['id'] . "'>التفاصيل</a></span>";
                                echo "<span class='btn btn-default'>عدد الاجابات: " . get_num_answers($row['id']) . " </span>";
                                echo "<span class='btn btn-default'>فئة السؤال: " . $row['cat'] . " </span>";
                                echo "<span class='btn btn-default' dir='rtl'>اسم الكاتب : " . get_user_name($row['usr_id']) . " </span>";
                                echo "</h4></div><hr class='col-lg-10 col-lg-offset-1' />";
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>