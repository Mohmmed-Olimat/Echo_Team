<?php
   session_start();
   include('../includes/studentClass.php');
   $x = new Student();

    if(isset($_POST['login'])){
      
        
    
    $email = $_POST['email'];
    $pass  = $_POST['pass'];
    $q=$x->login($email,$pass);
   
    
    if($q)
    {
            $row=$q[0];
            $_SESSION['student_id']=$row['stu_id'];
             header("location:../index.php");   
    }
    else
      {
        $error="Uncorrect Username Or Password";
      }
}

 ?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up </title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
    <link href="css/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
</head>
<body>

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form">
                        <h2 class="form-title">Log In</h2>
                        
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" placeholder="Your Email"/>
                        </div>
                       
                        
                      
                         <div class="form-group">
                            <input type="text" class="form-input" name="pass" id="password" placeholder="Password"/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                         <div class="form-group">
                    
                            <input type="submit" name="login" id="submit" class="form-submit" value="LOGIN"/>
                        </div>
                       
                        
                        

                    </form>
                    <br>
                        <div class="text-center">
                           <?php
                                if (isset($error)) 
                                {  echo "
                                    <div class='alert alert-danger ' role='alert'>
                                            $error
                                        </div>";
                                }
                                ?>

                        </div>
                            <div class="register-link">
                                <p>
                                    If you don't have an account?
                                    <a href="ssignup.php">Sign-up Here</a>
                                </p>
                            </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>