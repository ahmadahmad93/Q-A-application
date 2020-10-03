<?php
session_start();
include '../includes/db_connect.php';
if(isset($_POST['add'])){
    $user_id = (int)$_SESSION['id'];
    $name = $_POST['name'];
    $web =  isset($_POST['web'])?$_POST['web']:"" ;
    $address = isset($_POST['address'])?$_POST['address']:"";
    $about = isset($_POST['about'])?$_POST['about']:"";
    $target_dir = "../uploads/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $image_name = basename($_FILES["image"]["name"]);
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
    $sql = "INSERT INTO `users_personal`(`reg_id`, `name`, `img`, `website`, `address`, `about`) VALUES ($user_id,'$name','$image_name','$web','$address','$about')";
    $query = mysqli_query($conn, $sql);
    if($query){
        header("Location: ../success.php");
    }  else {
        header("Location: ../faild.php");
    }
}
    
