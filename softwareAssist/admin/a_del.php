<?php

include '../includes/db_connect.php';
$id = (int)$_GET['id'];
$sql = "DELETE FROM `articals` WHERE id=$id";
$query = mysqli_query($conn, $sql);
if($query){
    header("Location: articles.php");
}