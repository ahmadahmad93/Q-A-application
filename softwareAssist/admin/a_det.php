<?php
include 'header.php';
$id = (int) $_GET['id'];
$sql = "SELECT * FROM articals where id=$id";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($query);
?>
<section class="container" style="background-color: #FFF;">
    <div class="row">
        <h1 class="page-header text-center">
            <?php echo $row['title']; ?>
        </h1>
        <div class="col-lg-12" style="float: right;">
            <img src="../uploads/<?php echo $row['img']; ?>" class="img-responsive img-thumbnail" />
            <br/><br/>
            <blockquote class="blockquote-reverse text-right" style="padding: 5px"><?php echo $row['details']; ?></blockquote>
            <p class="text-right"><a class="btn btn-link"><?php echo get_user_name($row['usr_id']); ?></a></p>
            <br/>
            <br/>
            <div class="col-lg-10 col-lg-offset-1">
                            <h3 class="page-header text-right">التعليقات </h3>
                            
                            <div id="answers">
                                <?php
                                $sql_ans = "SELECT * FROM comments where a_id=$id";
                                $query_ans = mysqli_query($conn, $sql_ans);
                                while ($row_ans = mysqli_fetch_assoc($query_ans)) {
                                    echo "<div class='well warning'>";
                                    echo "<blockquote class='blockquote-reverse text-right' style='padding: 5px'>" . $row_ans['comment'] . "</blockquote>";
                                    echo "<p class='text-right'><a class='btn btn-link'>" . get_user_name($row_ans['usr_id']) . "</a></p>";
                                    echo "</div>";
                                }
                                ?>
                            </div>

                            <br/>
                        </div>
        </div>
    </div>
</section>
</body>
</html>