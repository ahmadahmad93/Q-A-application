<?php
session_start();
include "../includes/functions.php";
if (isset($_POST['answer'])) {
    $q_id = $_POST['q_id'];
    $answer = $_POST['answer'];
    $user_id = (int)$_SESSION['id'];
    $sql = "INSERT INTO `comments`(`a_id`, `usr_id`, `comment`) VALUES ($q_id,$user_id,'$answer')";
    $query = mysqli_query($conn, $sql);
    if ($query) {
        $sql_ans = "SELECT * FROM comments where a_id=$q_id";
        $query_ans = mysqli_query($conn, $sql_ans);
        while ($row_ans = mysqli_fetch_assoc($query_ans)) {
            echo "<div class='well warning'>";
            echo "<blockquote class='blockquote-reverse text-right' style='padding: 5px'>" . $row_ans['comment'] . "</blockquote>";
            echo "<p class='text-right'><a class='btn btn-link'>" . get_user_name($row_ans['usr_id']) . "</a></p>";
            echo "</div>";
        }
    } else {
        echo mysqli_error($conn);
    }
}