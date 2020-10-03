<?php
require 'db_connect.php';

function get_user_name($user){
    global $conn;
    $sql = "SELECT name from users_personal where reg_id=$user";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($query);
    $name = $row['name'];
    return $name;
}
function get_q_title($user){
    global $conn;
    $sql = "SELECT title from questions where id=$user";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($query);
    $name = $row['title'];
    return $name;
}
function get_num_answers($q){
    global $conn;
    $sql = "SELECT COUNT(id)as total from answers where q_id=$q";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($query);
    $total = $row['total'];
    return $total;
}
function get_num_answers_all(){
    global $conn;
    $sql = "SELECT COUNT(id)as total from answers";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($query);
    $total = $row['total'];
    return $total;
}
function get_num_articals_all(){
    global $conn;
    $sql = "SELECT COUNT(id)as total from articals";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($query);
    $total = $row['total'];
    return $total;
}
function get_num_questions_all(){
    global $conn;
    $sql = "SELECT COUNT(id)as total from questions";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($query);
    $total = $row['total'];
    return $total;
}
function get_num_users_all(){
    global $conn;
    $sql = "SELECT COUNT(id)as total from users";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($query);
    $total = $row['total'];
    return $total;
}
function get_user_articals($user) {
    global $conn;
     $sql = "SELECT id,title,time from articals where usr_id=$user";
    $query = mysqli_query($conn, $sql);
    if(mysqli_num_rows($query)>0){
      while($row = mysqli_fetch_assoc($query)){
        echo "<tr>";
        echo "<td class='text-center'>".$row['title']."</td>";
        echo "<td class='text-center'>".$row['time']."</td>";
        echo "<td class='text-center'><a class='btn btn-link' href='article.php?id=".$row['id']."'>استعراض</a></td>";
        echo "</tr>";
    }  
    }  else {
        echo "<tr><td colspan='3'>لا يوجد نتائج</td></tr>";
    }
}

function get_user_questions($user) {
    global $conn;
     $sql = "SELECT id,title,time from questions where usr_id=$user";
    $query = mysqli_query($conn, $sql);
    if(mysqli_num_rows($query)>0){
      while($row = mysqli_fetch_assoc($query)){
        echo "<tr>";
        echo "<td class='text-center'>".$row['title']."</td>";
        echo "<td class='text-center'>".$row['time']."</td>";
        echo "<td class='text-center'><a class='btn btn-link' href='question.php?id=".$row['id']."'>استعراض</a></td>";
        echo "</tr>";
    }  
    }  else {
        echo "<tr><td colspan='3'>لا يوجد نتائج</td></tr>";
    }
}
function get_user_questions_num($user) {
    global $conn;
     $sql = "SELECT COUNT(id) as total from questions where usr_id=$user";
    $query = mysqli_query($conn, $sql);
      $row = mysqli_fetch_assoc($query);
      echo $row['total'];
       
}
function get_user_articales_num($user) {
    global $conn;
     $sql = "SELECT COUNT(id) as total from articals where usr_id=$user";
    $query = mysqli_query($conn, $sql);
      $row = mysqli_fetch_assoc($query);
      echo $row['total'];
       
}
function get_user_ans_num($user) {
    global $conn;
     $sql = "SELECT COUNT(id) as total from answers where usr_id=$user";
    $query = mysqli_query($conn, $sql);
      $row = mysqli_fetch_assoc($query);
      echo $row['total'];
       
}

function get_last_5_users(){
    global $conn;
    $sql = "SELECT id,mail,time from users order by id desc limit 5";
    $query = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($query)){
    echo " <tr><td class='text-center'>".  get_user_name($row['id'])."</td><td class='text-center'>".$row['mail']."</td><td class='text-center'>".$row['time']."</td></tr>";
    }
}
function get_last_5_articals(){
    global $conn;
    $sql = "SELECT usr_id,title,time from articals order by id desc limit 5";
    $query = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($query)){
    echo " <tr><td class='text-center'>".$row['title']."</td><td class='text-center'>".  get_user_name($row['usr_id'])."</td><td class='text-center'>".$row['time']."</td></tr>";
    }
}
function get_last_5_questions(){
    global $conn;
    $sql = "SELECT usr_id,title,time from questions order by id desc limit 5";
    $query = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($query)){
    echo " <tr><td class='text-center'>".$row['title']."</td><td class='text-center'>".  get_user_name($row['usr_id'])."</td><td class='text-center'>".$row['time']."</td></tr>";
    }
}
function get_last_5_answers(){
    global $conn;
    $sql = "SELECT q_id,usr_id,time from answers order by id desc limit 5";
    $query = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($query)){
    echo " <tr><td class='text-center'>".get_q_title($row['q_id'])."</td><td class='text-center'>".  get_user_name($row['usr_id'])."</td><td class='text-center'>".$row['time']."</td></tr>";
    }
}