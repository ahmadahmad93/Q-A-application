<?php
session_start();
include '../includes/db_connect.php';
if(isset($_POST['add'])){
    $user_id = (int)$_SESSION['id'];
    $title = $_POST['title'];
    $details = $_POST['details'];
    $target_dir = "../uploads/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $image_name = basename($_FILES["image"]["name"]);
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
    $sql = "INSERT INTO `articals`(`usr_id`, `title`, `img`, `details`) VALUES ($user_id,'$title','$image_name','$details')";
    $query = mysqli_query($conn, $sql);
    if($query){
        header("Location: ../success.php");
    }  else {
        header("Location: ../faild.php");
    }
}
    
