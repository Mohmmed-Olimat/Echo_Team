<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login </title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="main">

        <!-- Sing in  Form -->
        <section class="">
            <div class="container">
                <div class="signin-content">
                        <img src="images/2.jpg" alt="sing up image" style="width: 400px;height: 400px">
                   

                           
                    <div class="signin-form">
                        <h2 class="form-title">Login</h2>
                        <form method="POST">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="your_name" id="your_name" placeholder="Your Name"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="your_pass" id="your_pass" placeholder="Password"/>
                            </div>
                         

                        </form>
                         <div class=" form-button">
                                <a href="index.php">
                                <input type="submit"   class="form-submit" value="Log in"/>
                            </a>

                            </div>
                            <div style="margin-top: 50px;">
<a href="signup.php" class="signup-image-link">Create an account</a></div>
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