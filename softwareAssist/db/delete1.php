<?php

include '../includes/db_connect.php';

$id = (int)$_GET['id'];
$sql = "delete from questions where id=$id";
$query = mysqli_query($conn, $sql);
if($query){
    header("Location: ../myquestions.php");
}  else {
    header("Location: ../faild.php");
}