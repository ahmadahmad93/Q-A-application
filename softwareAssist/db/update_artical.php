<?php

include '../includes/db_connect.php';
if(isset($_POST['add'])){
    $id=(int) $_GET['id'];
    $title = $_POST['title'];
    $details = $_POST['details'];
    if(is_uploaded_file($_FILES["image"]["name"])){
       $target_dir = "../uploads/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $image_name = basename($_FILES["image"]["name"]);
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
    $sql = "UPDATE `articals` SET `title`='$title',`img`='$image_name',`details`='$details' WHERE id=$id";
    $query = mysqli_query($conn, $sql);
    if($query){
        header("Location: ../success.php");
    }  else {
        header("Location: ../faild.php");
    } 
    }
 else {
         $sql = "UPDATE `articals` SET `title`='$title',`details`='$details' WHERE id=$id";
    $query = mysqli_query($conn, $sql);
    if($query){
        header("Location: ../success.php");
    }  else {
        header("Location: ../faild.php");
    } 
    }
    
}
    
