<?php
session_start();
if (! $_SESSION['student_id'] )
{
    header("location:signup_student/slogin.php");

}
include('studentClass.php');
include('includes/categoryClass.php');
include('includes/examClass.php');
include('includes/questionClass.php');
include('includes/resultClass.php');
include('includes/historyClass.php');

$x = new Student();
$id=$_SESSION['student_id'];
$data=$x->readById($id);
$studentSet=$data[0];

?>


<!doctype html>
<html class="no-js" lang="en">

<head>
    <style type="text/css">
        .si{
            font-size: 25px !important;
        }
    </style>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Online Examination System</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
        ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
        ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- owl.carousel CSS
        ============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- animate CSS
        ============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- meanmenu icon CSS
        ============================================ -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- main CSS
        ============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- educate icon CSS
        ============================================ -->
    <link rel="stylesheet" href="css/educate-custon-icon.css">
    <!-- morrisjs CSS
        ============================================ -->
    <link rel="stylesheet" href="css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
        ============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
        ============================================ -->
    <link rel="stylesheet" href="css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
        ============================================ -->
    <link rel="stylesheet" href="css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="css/calendar/fullcalendar.print.min.css">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" type="text/css" href="public.css">
    <!-- modernizr JS
        ============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
   

    <!-- Start Welcome area -->
    <div class="">
    
        <div class="col-lg-12">
           
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row" style="background-color: #00b386">
                        
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12" >
                                        <div class="header-top-menu tabl-d-n">
                                            <ul class="nav navbar-nav mai-top-nav">
                                                <li> 
                       
                            <a href="index.php"><img class="main-logo" 
                                src="img/oeslogo.png" alt="" /></a>
                        </li>
                                                <li class=""><a href="index.php" class="nav-link h4 si " >Home</a>
                                                </li>
                                                <li class="nav-item"><a href="Category.php" class="nav-link h4 si">Category</a>
                                                </li>
                                                <li class="nav-item"><a href="history.php" class="nav-link h4 si">Your History</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class=" h4 si col-lg-6 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                               
                                                <li class="nav-item">

                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                        <?php
                                                        $img=$studentSet['image']; 
                                                        echo "<img src='Admin/img/student/$img'>"; 
                                                         ?>

                                                            <span class="admin-name si">
                                                                <?php echo $studentSet['full_name'];?>    
                                                            </span>
                                                            <i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
                                                        </a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                    
        
                                                           <li> <a href="signup_student/updateinfo.php">Update Info</a></li>
                                                          <li> <a href="signup_student/logout.php">Logout</a></li>
                                                    </ul>
                                                </li>
                                               
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            
            <div class="breadcome-area" >
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                           <!--  <div class="breadcome-list">
                           
                            </div> -->
                        </div>
                    </div>
                </div>
            </div> 
        </div>


    </div>
       