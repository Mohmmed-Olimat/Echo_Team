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
</head>
<body>

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form">
                        <h2 class="form-title">Create account</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="name"  placeholder="Full Name"/>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" placeholder="Your Email"/>
                        </div>
                       
                        <div class="form-group">
                            <input type="text" class="form-input"  placeholder="Phone"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" placeholder="Education level"/>
                        </div>
                         <div class="form-group">
                            <input type="text" class="form-input" name="password" id="password" placeholder="Password"/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <input type="file" name ="image" class="form-input"  placeholder="Your Image"/>
                        </div>
                        
                        

                    </form>
                    <div class="form-group">
                        <a href="slogin.php">
                            <input type="submit" name="submit"  class="form-submit" value="Sign up"/></a>
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