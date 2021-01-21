 <?php
session_start();
    include("includes/adminClass.php");
    $x = new Admin();

  
if (! $_SESSION['id'] )
{
    header("location:login_Admin/Login.php");

}
    

    if(isset($_POST['submit'])){
       if($paf=$x->PassandFail($_POST['exam_id'])){

            $pcount=1;
            $fcount=1;
            $d=array();
            $d['pass']=0;
            $d['fail']=0;

            foreach ($paf as $key => $value) {
            foreach ($value as $k => $v) {$row[$k]=$v;}
             if(($row['mark'])>4){$d['pass']=$pcount;$pcount++;}
             else{$d['fail']=$fcount;$fcount++;}
     }
            $d['name']=$row['name'];
       
 
        
    }
    else {
            echo "
            <script type='text/javascript'>
            alert('No-one Took This Exam')
            </script>";
    }
}


?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard</title>
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
    <!-- modernizr JS
        ============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
     <!--  JQ
        ============================================ -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js">
        
    </script>
    <style type="text/css">
        #totop{
            display: none;
            position: fixed;
            bottom: 20px;
            right: 30px;
            z-index: 99;
            font-size: 18px;
            border: none;
            outline: none;
            background-color: blue  ;
            color: white;
            cursor: pointer;
            padding: 15px;
            border-radius: 20px;
        }
    </style>

</head>

<body>
   
    <!-- Start Left menu area -->
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="index.php"><img class="main-logo" src="img/logo/oeslogo.png" alt="" /></a>
                <strong><a href="index.php"><img src="img/logo/oeslogo.png" alt="" /></a></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li class="active">
                            <a class="" href="index.php">
                                   <span class="educate-icon educate-home icon-wrap"></span>
                                   <span class="mini-click-non">Admin Dashboard</span>
                                </a>
                       
                        </li>
                   
                        <li>
                            <a class="" href="manageadmin.php" aria-expanded="false"><span class="educate-icon educate-professor icon-wrap"></span> <span class="mini-click-non">Admin</span></a>
                        
                        </li>
                        <li>
                            <a class="" href="manage_student.php" aria-expanded="false"><span class="educate-icon educate-student icon-wrap"></span> <span class="mini-click-non">Students</span></a>
                          
                        </li>
                        <li>
                            <a class="" href="manage_category.php" aria-expanded="false"><span class="educate-icon educate-course icon-wrap"></span> <span class="mini-click-non">Category</span></a>
                        
                        </li>
                        <li>
                            <a class="" href="manage_exam.php" aria-expanded="false"><span class="educate-icon educate-library icon-wrap"></span> <span class="mini-click-non">Exam</span></a>
                           
                        </li>
                   
                    
                   
                   
                        <li>
                            <a class="" href="manage_question.php" aria-expanded="false"><span class="educate-icon educate-data-table icon-wrap"></span> <span class="mini-click-non">Questions</span></a>
                           
                        </li>
                       
                    
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- End Left menu area -->

    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                                    <i class="educate-icon educate-nav"></i>
                                                </button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                <li class="nav-item dropdown">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="educate-icon educate-message edu-chat-pro" aria-hidden="true"></i><span class=""></span></a>
                                                    <div role="menu" class="author-message-top dropdown-menu animated zoomIn">
                                                        <div class="message-single-top">
                                                            <h1>Message</h1>
                                                        </div>
                                                      
                                                        <div class="message-view">
                                                            <a href="#">View All Messages</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="educate-icon educate-bell" aria-hidden="true"></i><span class=""></span></a>
                                                    <div role="menu" class="notification-author dropdown-menu animated zoomIn">
                                                        <div class="notification-single-top">
                                                            <h1>Notifications</h1>
                                                        </div>
                                                      
                                                        <div class="notification-view">
                                                            <a href="#">View All Notification</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                            <img src="img/product/pro4.jpg" alt="" />
                                                            <span class="admin-name">
                                                                <?php echo $_SESSION['admin_name'];?>
                                                                    
                                                            </span>
                                                            <i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
                                                        </a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                    
        
                                                        <li><a href="login_Admin/logout.php"><span class="edu-icon edu-locked author-log-ic"></span>Log Out</a>
                                                        </li>
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



          
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list">
                           
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       

<div class="container">
<?php  

 $c=$x->st_count();
 $topcat=$x->topcat();
 $topexam=$x->topexam();
 


 ?>
                    <div class="row"> <!-- View Numbers of Students in the system  -->
                    <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                        <div class="social-media-edu">
                            <i class="fa fa-user"></i>
                            <div class="social-edu-ctn">
                                <h1><span><span class="counter">
                                    <?php echo $c[0]['count']?>
                                    </span>
                                    <?php echo"  "."Students"?>
                                </span></h1>
                                <span> In the system</span>
                            </div>
                        </div>

                    </div>
                </div>

                <div><h1></h1></div>

                <div class="row"> <!-- View Top Three Category in the system  -->
                <div class="col-lg-12 col-md-3 col-sm-3 col-xs-12">
                        <div class="white-box analytics-info-cs mg-b-10 res-mg-t-30 table-mg-t-pro-n res-mg-b-30 tb-sm-res-d-n dk-res-t-d-n">
                            <h1 class="box-title">Top Three Category </h1>
                           </div> </div> </div>

                    <div class="row">
                    <?php
                    $ci=1;
                foreach ($topcat as $key => $value) {
                foreach ($value as $k => $v) {$row[$k]=$v;}

                    echo "
                    <div class='col-lg-3 col-md-3 col-sm-3 col-xs-12'>
                        <div class='white-box analytics-info-cs mg-b-10 res-mg-t-30 table-mg-t-pro-n res-mg-b-30 tb-sm-res-d-n dk-res-t-d-n'>
                            <h3 class='box-title'>Category #{$ci} </h3>
                            <ul class='list-inline two-part-sp'>
                              
                                <li class='text-right sp-cn-r'> <span class='text-success'><span >{$row['cat_name']}</span></span>
                                </li>


                            </ul>
                             </div>


                    </div>";
                    $ci++;
                }
                    ?>

                    
                    </div> <!-- End View Top Three Category  -->

                    <div class="row"> <!-- View Top Two exams taken by students  in the system  -->
                <div class="col-lg-12 col-md-3 col-sm-3 col-xs-12">
                        <div class="white-box analytics-info-cs mg-b-10 res-mg-t-30 table-mg-t-pro-n res-mg-b-30 tb-sm-res-d-n dk-res-t-d-n">
                            <h1 class="box-title">Top Two Exams </h1>
                           </div> </div> </div>

                    <div class="row">
                    <?php
                    $ci=1;
                  foreach ($topexam as $key => $value) {
          foreach ($value as $k => $v) {$row[$k]=$v;}

                    echo "
                    <div class='col-lg-3 col-md-3 col-sm-3 col-xs-12'>
                        <div class='white-box analytics-info-cs mg-b-10 res-mg-t-30 table-mg-t-pro-n res-mg-b-30 tb-sm-res-d-n dk-res-t-d-n'>
                            <h3 class='box-title'>Exam #{$ci} </h3>
                            <ul class='list-inline two-part-sp'>
                              
                                <li class='text-right sp-cn-r'> <span class='text-success'><span >{$row['name']}</span></span>
                                </li>


                            </ul>
                             </div>


                    </div>";
                    $ci++;
                }
                    ?>

                    
                    </div> <!-- End View Top Two exams  -->


                            <div class="row"> <!-- View student Fail or Pass in specific exam  -->
                <div class="col-lg-12 col-md-3 col-sm-3 col-xs-12">
                        <div class="white-box analytics-info-cs mg-b-10 res-mg-t-30 table-mg-t-pro-n res-mg-b-30 tb-sm-res-d-n dk-res-t-d-n">
                            <h1 class="box-title">Fail or Pass in specific exam </h1>
                                  <form action="" class="pl-5" method="post" enctype="multipart/form-data">   
                   <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-12 col-md-3 col-sm-3 col-xs-12">
                            
                             
                             <select name="exam_id" id="select" class="form-control">
                                        <option value="0">Please select</option>
                                            <?php
                                             if ($data=$x->readAllexam()){       
                         
                                        foreach ($data as $key => $value) {
                                            foreach ($value as $k => $v) {$row[$k]=$v;}
                                            
                                            $i=$row['exam_id'];
                                            echo "<option value=$i>";
                                            echo "{$row['name']}";
                                            echo "</option>";

                                            }
                                        }
                                             ?>
                                                    </select>
                         </div>  
                     </div>
                 </div> 
                   <div>      

                   <button class="btn btn-lg btn-info col-lg-12" type="submit" name="submit">
                    Show
                </button>

            </div> 
             </form>
                           </div> </div> </div>

                   


                    
<?php 

  
     if(isset($d))
     {

     


        echo "
         <div class='col-lg-3 col-md-6 col-sm-6 col-xs-12' id='pass'>
                        <div class='social-media-edu linkedin-cl res-mg-t-30 res-tablet-mg-t-30 dk-res-t-pro-30'>
                            <i class='fa fa-check'></i>
                            <div class='social-edu-ctn'>
                                <h3> {$d['pass']} Student PASS</h3>
                                <p>In  {$d['name']} Exam</p>
                            </div>
                        </div>
                    </div>

                       <div class='col-lg-3 col-md-6 col-sm-6 col-xs-12'>
                        <div class='social-media-edu youtube-cl res-mg-t-30 res-tablet-mg-t-30 dk-res-t-pro-30'>
                            <i class='fa fa-times'></i>
                            <div class='social-edu-ctn'>
                                <h3>{$d['fail']} Student fail</h3>
                                <p>In {$d['name']} Exam</p>
                            </div>
                        </div>
                    </div>";
}
                         ?>


                         <button id="totop" onclick="topFunction()">Top</button>
</div>
        <!-- footer start -->
        
 
    </div>



    <script type="text/javascript">
     

      
            $(document).ready(function(){
                

                $("#totop").css("position","fixed");
                
                
             });

            
    //Get the button
    var mybutton = document.getElementById("totop");

        //scrolls down show the button
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
            if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }

        function topFunction() {
         document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
}

    </script>

    <!-- jquery
        ============================================ -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
        ============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
        ============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
        ============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
        ============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
        ============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- sticky JS
        ============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
        ============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- counterup JS
        ============================================ -->
    <script src="js/counterup/jquery.counterup.min.js"></script>
    <script src="js/counterup/waypoints.min.js"></script>
    <script src="js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
        ============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
        ============================================ -->
    <script src="js/metisMenu/metisMenu.min.js"></script>
    <script src="js/metisMenu/metisMenu-active.js"></script>
    <!-- morrisjs JS
        ============================================ -->
    <script src="js/morrisjs/raphael-min.js"></script>
    <script src="js/morrisjs/morris.js"></script>
    <script src="js/morrisjs/morris-active.js"></script>
    <!-- morrisjs JS
        ============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/jquery.charts-sparkline.js"></script>
    <script src="js/sparkline/sparkline-active.js"></script>
    <!-- calendar JS
        ============================================ -->
    <script src="js/calendar/moment.min.js"></script>
    <script src="js/calendar/fullcalendar.min.js"></script>
    <script src="js/calendar/fullcalendar-active.js"></script>
    <!-- plugins JS
        ============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
        ============================================ -->
    <script src="js/main.js"></script>
    <!-- Charts JS
        ============================================ -->
   <script src="js/charts/Chart.js"></script>
     <script src="js/charts/bar-chart.js"></script>
   
</body> 

</html>



       