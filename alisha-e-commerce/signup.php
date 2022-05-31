<?php require 'common.php'; 
if(isset($_SESSION['email'])) {
 header('location: products.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&family=Simonetta:wght@900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/login.css">
</head>
<body>
    <header>
        <div class="header">
        <h1>Alisha's Collection</h1>
        </div>
        <nav>
            <ul>
            <?php include 'navbar.php'?>
                 
            </ul>
        </nav>
    </header>
    
      
          <div class="wrapper">
            <div class="inner-warpper text-center">
              <h2 class="title">Sign up to your account</h2>
              <form action="signup_script.php" method="POST" id="formvalidate">
                <div class="input-group">
                  <label class="palceholder" for="name">User Name</label>
                  <input class="form-control" name="name" id="name" type="text" placeholder="" />
                  <span class="lighting"></span>
                </div>
                <div class="input-group">
                  <label class="palceholder" for="email">User Email</label>
                  <input class="form-control" name="email" id="email" type="email" placeholder="" />
                  <span class="lighting"></span>
                </div>

                <div class="input-group">
                  <label class="palceholder" for="password">New Password</label>
                  <input class="form-control" name="password" id="password" type="password" placeholder="" />
                  <span class="lighting"></span>
                </div>
                <div class="input-group">
                    <label class="palceholder" for="contact">Contact</label>
                    <input class="form-control" name="contact" id="contact" type="tel" placeholder="" />
                    <span class="lighting"></span>
                  </div>
                  <div class="input-group">
                    <label class="palceholder" for="city">City</label>
                    <input class="form-control" name="city" id="city" type="text" placeholder="" />
                    <span class="lighting"></span>
                  </div>
                  <div class="input-group">
                    <label class="palceholder" for="address">Address</label>
                    <input class="form-control" name="address" id="address" type="text" placeholder="" />
                    <span class="lighting"></span>
                  </div>
          
                <button type="submit" id="login">Sign Up</button>
                <div class="clearfix supporter">
                  <div class="pull-left remember-me">
                    <input id="rememberMe" type="checkbox">
                    <label for="rememberMe">Remember Me</label>
                  </div>
                
                </div>
                <div class="signup-wrapper text-center">
                    <a href="login.php">Already have an accout? <span class="text-primary">Log in</span></a>
                  </div>
              </form>
            </div>
          
          </div>
          
       
         
          <!-- partial -->
            <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
          <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js'></script>
          <script  src="./js/script.js"></script>
          
          
    <footer>
<h3>Know<br/>&downarrow;&downarrow;</h3>
<div class="footer-content">
<section>
    <h4>Customer Service</h4>
    <pre>
        <a href="#">Help and Contact</a>
        <a href="#">Delivery Information</a>
        <a href="#">Women's Wear</a>
        <a href="#">Men's Wear</a>
        <a href="#">Kid's Fashion</a>
        <a href="#">Track Order</a>
        <a href="#">Offer and More</a>
    </pre>
</section>
<section>
    <h4>About Us</h4>
    <pre>
        <a href="#">Contact</a>
        <a href="#">Find More</a>
        <a href="#">Blog</a>
    </pre>
</section>
<section class="correct">
    <p>Sign up to recieve exclusive offers and news</p>
    <input type="text" placeholder="enter your email address" />
    <input type="button" value="Subscribe" />
   <pre> <a href="#" >Term and Condition</a>
    <a href="#" >Privacy Policy</a>
    <p>&copy; 2022 Alisha's Collection. All Rights Reserved.</p>
</pre>
</section>
</div>
    </footer>
</body>
</html>