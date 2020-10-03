<?php
include './header.php';
if (!isset($_GET['id'])) {
    header("Location: index.php");
} else {
    $id = (int) $_GET['id'];
    $sql = "SELECT * FROM articals where id=$id";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($query);
}
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
                            <span id="a_id" style="display: none"><?php echo $id; ?></span>
                            <h3 class="page-header text-right"><?php echo $row['title']; ?></h3>
                            <img src="uploads/<?php echo $row['img']; ?>" class="img-responsive img-thumbnail" />
                            <br/><br/>
                            <blockquote class="blockquote-reverse text-right" style="padding: 5px"><?php echo $row['details']; ?></blockquote>
                            <p class="text-right"><a class="btn btn-link"><?php echo get_user_name($row['usr_id']); ?></a></p>
                            <br/>
                            <br/>
                        </div>
                        <div class="col-lg-10 col-lg-offset-1">
                            <h3 class="page-header text-right">التعليقات <span class="pull-left"><button class="btn btn-info" id="new">اضافة تعليق</button></span></h3>
                            <div class="row" id="a_con" style="display: none">
                                <div class="col-lg-12">
                                    <textarea class="form-control col-lg-12" id="answer"></textarea>
                                    <br/>
                                    <button class="btn btn-block btn-success" onclick="add_anserr()">اضافة</button>
                                </div>
                            </div> 
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
            </div>
        </div>

    </div>
    <script>
        $(document).ready(function() {
            $("#new").click(function() {
                $("#a_con").slideToggle("slow");
            });
        });
    </script>
    <script>
        function add_anserr() {
            var ans = $('#answer').val();
            var q_id = $('#a_id').html();
            $.ajax({
                url: 'db/new_com.php',
                type: 'post',
                data: "answer=" + ans + "&q_id=" + q_id,
                success: function(data) {
                    $('#answers').html(data);
                }
            });
        }
    </script>
</section>
<?php
include './footer.php';
?>     