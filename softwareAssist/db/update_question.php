<?php
include '../includes/db_connect.php';
if(isset($_POST['add'])){
    $id = (int) $_GET['id'];
    $title = $_POST['title'];
    $details = $_POST['details'];
    $cat = $_POST['cat'];
    $sql = "UPDATE `questions` SET `title`='$title',`cat`='$cat',`details`='$details' WHERE id=$id";
    $query = mysqli_query($conn, $sql);
    if($query){
        header("Location: ../success.php");
    }  else {
        header("Location: ../faild.php");
    }
}
    
