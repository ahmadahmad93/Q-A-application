<?php
    include './includes/functions.php';
session_start();
if(isset($_SESSION['id'])){
   $id = (int)$_SESSION['id'];
    $sql = "SELECT * FROM users_personal where reg_id=$id";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($query); 
}

    
    
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>موقع المساعد البرمجي</title>
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/style.css"/>
        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>

    <body>
        <header>
            <div class="container header inner">
                <nav class="navbar">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#">موقع المساعد البرمجي</a>
                        </div>
                        <div class="collapse navbar-collapse" id="myNavbar">
                            <ul class="nav navbar-nav navbar-right masthead-nav" style="float: right;">
                                <li><a href="register.php"> التسجيل</a></li>
                                <li><a href="all_articles.php"> المقالات</a></li>
                                <li><a href="all_questions.php">  استعراض الاسئلة</a></li>
                                <li><a href="new_question.php"> اسأل سؤال</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <?php
                if(isset($query) && $_SESSION['id'])
                if(mysqli_num_rows($query)>0){
                    ?>
                
                <div class="jumbotron">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4">
                                <img src="uploads/<?php echo $row['img'];?>" class="img-rounded img-responsive img-thumbnail" />
                            </div>
                            <div class="col-lg-4">
                                <h1><?php echo $row['name']; ?></h1>
                            </div>
                             <div class="col-lg-4">
                                 
                                 <ul class="list-group">
                                     <h3 class="list-group-item list-group-item-heading">روابط خاصة.....</h3> 
                                     <li class="list-group-item"><a href="myarticales.php">مقالاتي</a></li>
                                     <li class="list-group-item"><a href="myquestions.php">اسئلتي</a></li>
                                 </ul>
                                 
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>
        </header>
        <div class="container-fluid tabStrip">
            <ul class="nav nav-tabs text-center">
                <li class="col-sm-6 blue" style="float: right;"><a href="myprofile.php"><i class="fa fa-user fa-2x col-sm-12"></i><span class="col-sm-12">ملفي الشخصي</span></a></li>
                <li class="col-sm-6 green" style="float: right;"><a href="logout.php"><i class="fa fa-sign-out fa-2x col-sm-12"></i><span class="col-sm-12">تسجيل الخروج</span></a></li>
            </ul>
        </div>