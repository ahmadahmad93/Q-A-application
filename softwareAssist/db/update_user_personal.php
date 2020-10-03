<?php
include '../includes/db_connect.php';
if(isset($_POST['add'])){
    $id=(int)$_GET['id'];
    $name = $_POST['name'];
    $web =  isset($_POST['web'])?$_POST['web']:"" ;
    $address = isset($_POST['address'])?$_POST['address']:"";
    $about = isset($_POST['about'])?$_POST['about']:"";
    if(is_uploaded_file($_FILES["image"]["name"])){
    $target_dir = "../uploads/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $image_name = basename($_FILES["image"]["name"]);
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
    $sql = "UPDATE `users_personal` SET `name`='$name',`img`='$image_name',`website`='$web',`address`='$address',`about`='$about' WHERE id=$id";
    $query = mysqli_query($conn, $sql);
    if($query){
        header("Location: ../success.php");
    }  else {
        header("Location: ../faild.php");
    }
    }  else {
        $sql = "UPDATE `users_personal` SET `name`='$name',`website`='$web',`address`='$address',`about`='$about' WHERE id=$id";
    $query = mysqli_query($conn, $sql);
    if($query){
        header("Location: ../success.php");
    }  else {
        header("Location: ../faild.php");
    }
    }
    
}