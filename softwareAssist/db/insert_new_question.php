<?php
session_start();
include '../includes/db_connect.php';
if(isset($_POST['add'])){
    $user_id = (int)$_SESSION['id'];
    $title = $_POST['title'];
    $details = $_POST['details'];
    $cat = $_POST['cat'];
    $sql = "INSERT INTO `questions`(`usr_id`, `title`, `cat`, `details`) VALUES ($user_id,'$title','$cat','$details')";
    $query = mysqli_query($conn, $sql);
    if($query){
        header("Location: ../success.php");
    }  else {
        header("Location: ../faild.php");
    }
}
    
