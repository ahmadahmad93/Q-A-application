<?php
include './header.php';
$sql = "SELECT * FROM articals order by time DESC";
$query = mysqli_query($conn, $sql);
?>
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


                <!-- Tab panes -->

                <div class="row">
                    <?php
                    while($row=  mysqli_fetch_assoc($query)){
                        echo "<div class='col-lg-12'>";
                        echo "<div class='col-lg-3' style='float: right;'>";
                        echo "<img src='uploads/".$row['img']."' class='img-thumbnail' />";
                        echo "</div>";
                        echo "<div class='col-lg-8' style='float: right;'>";
                        echo "<h4 class='text-right text-info'>".$row['title']."</h4>";
                        echo "<p class='text-right text-muted>".  get_user_name($row['usr_id'])."</p>";
                        echo "<p class='text-right'>".  substr($row['details'],0, 200)."</p>";
                        echo "<span><a class='btn btn-link' href='article.php?id=".$row['id']."'>التفاصيل</a></span>";
                        echo "</div>";
                        echo "</div>";
                        echo "<hr class='col-lg-10 col-lg-offset-1' />";
                    }
                    ?>
                    
                </div>

            </div>
        </div>
    </div>
</div>

</div>