<?php
include('../includes/studentClass.php');
$x = new Student();
$email     = "";
$mobile    = "";
$conpass   = "";
$pass      ="";
$edu_level ="";
$name      ="";
$connpass  ="";
$error     =0;

 if(isset($_POST['submit'])){
    $email      = $_POST['email'];
    $mobile     = $_POST['mobile'];
    $conpass    = $_POST['con_pass'];
    $pass       =$_POST['pass'];
    $edu_level  =$_POST['edu_level'];
    $name       =$_POST['full_name'];

    if ($conpass != $pass) 
    {  
       $errorcon=" * Password not match !!";
       $error=1;

    }
    if (! filter_var($email,FILTER_VALIDATE_EMAIL)) 
    {
       $emailerror=" * Invaild email format";
       $error=1;
    }
    if ( ! preg_match("/^[A-Z][a-zA-Z0-9]+$/", $pass)) 
    {
       $errorpass=" * Password must start with upper case letter and contain letters and digits";
       $error=1;
    }
    if (empty($mobile)|| strlen($mobile)>10 || strlen($mobile)<10) 
    {
       $errormobile=" * Mobile not vaild";
       $error=1;
    }
    if ($error == 0) 
    {   
      
        $x->email      = $email;
        $x->full_name  = $name;
        $x->password   = $pass;
        $x->mobile     = $mobile;
        $x->edu_level  = $edu_level;
        $x->image      = $_FILES['std_image']['name'];
        $tmp_name      = $_FILES['std_image']['tmp_name'];
        $path          ='../Admin/img/student/'; 

        move_uploaded_file($tmp_name,$path.$x->image);
        $q=$x->create();
        if ($q) 
        {
            header("location:slogin.php");
        }   
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
                    <form method="POST" id="signup-form" class="signup-form" enctype='multipart/form-data'>
                        <h2 class="form-title">Create account</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="full_name"  placeholder="Full Name"
                            value="<?php echo $name;?>" />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="email" placeholder="Your Email" value="<?php echo $email;?>" />
                            <div style="color:red; ">
                                <?php if (isset($emailerror))
                                { echo $emailerror; }?>
                                    
                            </div>
                        </div>
                       
                        <div class="form-group">
                            <input type="text" class="form-input"  placeholder="Phone" name="mobile"  value="<?php echo $mobile;?>"  />
                            <div style="color:red; ">
                                <?php if (isset($errormobile)) 
                                { echo $errormobile; }?>       
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" placeholder="Education level" name="edu_level"  value="<?php echo $edu_level;?>"/>
                        </div>
                         <div class="form-group">
                            <input type="password" class="form-input" name="pass" id="password" placeholder="Password" value="<?php echo $pass;?>" />
                             <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                            <div style="color:red; ">
                                <?php if (isset($errorpass)) 
                                { echo $errorpass; }?>       
                            </div>

                            
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="con_pass" id="password" placeholder="Confirm-Password"/>
                              <div style="color:red; ">
                                <?php if (isset($errorcon)) 
                                { echo $errorcon; }?>       
                             </div>

                        </div>
                        <div class="form-group">
                            <label>Upload Image:</label>
                            <input type="file" name ="std_image" class="form-input"  placeholder="Your Image"/>
                        </div>

                         <div class="form-group">
                        
                            <input type="submit" name="submit"  class="form-submit" value="Sign up"/>
                        </div>               

                    </form>
                     <br>
                       <div class="register-link">
                                <p>
                                    Already have an account?
                                    <a href="slogin.php">Sign-in Here</a>
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