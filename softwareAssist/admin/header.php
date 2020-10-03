<?php
include '../includes/functions.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>المدير</title>
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/style.css"/>
        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script>
        // toggle class scroll 
$(window).scroll(function() {
    if($(this).scrollTop() > 50)
    {
        $('.navbar-trans').addClass('afterscroll');
    } else
    {
        $('.navbar-trans').removeClass('afterscroll');
    }  

});
        </script>
    </head>

    <body>
<nav class="navbar navbar-default navbar-doublerow navbar-trans navbar-fixed-top">
  <!-- top nav -->
  <nav class="navbar navbar-top hidden-xs">
    <div class="container">
      <!-- left nav top -->
      <ul class="nav navbar-nav pull-left">
        
      </ul>
      <!-- right nav top -->
      <ul class="nav navbar-nav pull-right">
        <li><a href="" class="text-white">تسجيل خروج</a></li>
      </ul>
    </div>
    <div class="dividline light-grey"></div>
  </nav>
  <!-- down nav -->
  <nav class="navbar navbar-down">
    <div class="container">
      <div class="flex-container">  
        <div class="navbar-header flex-item">
          <div class="navbar-brand" href="">موقع المساعد البرمجي</div>
        </div>
        <ul class="nav navbar-nav flex-item hidden-xs">
            <li><a href="users.php">مستخدمون</a></li>
            <li><a href="articles.php">مقالات</a></li> 
            <li><a href="questions.php">اسئلة</a></li>
            <li><a href="index.php">الرئيسية</a></li>
        </ul>
        
        </div>  
      </div>
    </nav>
