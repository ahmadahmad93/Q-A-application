<?php
include '../includes/db_connect.php';
if(isset($_POST['add'])){
    $mail = $_POST['mail'];
    $pwd = $_POST['pwd'];
    $sql = "INSERT INTO `users`(`mail`, `pwd`) VALUES ('$mail','$pwd')";
    $query = mysqli_query($conn, $sql);
    if($query){
        header("Location: ../success.php");
    }  else {
        header("Location: ../faild.php");
    }
}
    
