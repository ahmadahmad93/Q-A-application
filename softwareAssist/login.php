<?php
include './includes/db_connect.php';
session_start();
if(isset($_POST['add'])){
    $mail = $_POST['mail'];
    $pwd = $_POST['pwd'];
    $sql = "SELECT * FROM users WHERE mail LIKE '$mail' AND pwd LIKE '$pwd'";
    $query = mysqli_query($conn, $sql);
    if(mysqli_num_rows($query)==1){
        $row = mysqli_fetch_assoc($query);
        $_SESSION['id'] = $row['id'];
        header("Location: index.php");
    }
}