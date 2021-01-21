<?php
    
   include('../../includes/adminClass.php');
   $x         = new Admin();
   $connpass  ="";
   $name      ="";
   $email     = "";
   $pass      ="";
   $error     =0;
    if(isset($_POST['signup']))
    {
    $name    = $_POST['name']; 
    $email   = $_POST['email'];
    $conpass = $_POST['con_pass'];
    $pass    =$_POST['pass'];

    if ($conpass != $pass) 
    {  
       $errorpass=" * Password not match !!";
       $error=1;
    }
    if (! filter_var($email,FILTER_VALIDATE_EMAIL)) 
    {
       $emailerror=" * Invaild email format";
       $error=1;
    }
    if ($error==0) 
    {
        $x->admin_email = $email;
      $x->password    = $pass;
      $x->admin_name  = $name;
      $q=$x->create();
    
    if($q){ header("location:Login.php");}

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

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <img src="images/4.png" alt="sing up image" style="width: 500px;height: 400px">
              
                    <div class="signup-form">

                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name"
                                        value="<?php echo $name ;?>" required />
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="text" name="email" id="email" placeholder="Your Email"
                                       value="<?php echo $email; ?>" required />
                                <div style="color: red;">
                                    <?php
                                    if (isset($emailerror)) 
                                    {
                                    echo $emailerror ;
                                    }
                                    ?>
                                    
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Password" required />
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="con_pass" id="pass" placeholder="Confirm-Password" required />
                                <div style="color: red;">
                                    <?php
                                    if (isset($errorpass)) 
                                    {
                                    echo $errorpass ;
                                    }
                                    ?>
                                    
                                </div>
                            </div>
                     
                           <input type="submit" name="signup"  class="form-submit" value="Register"/>

                        </form>
                        <br>
                       <div class="register-link">
                                <p>
                                    Already have an account?
                                    <a href="Login.php">Sign-in Here</a>
                                </p>
                            </div>
                           
                    </div>
                    
                </div>
            </div>
        </section>
    </div>
</body>
</html>