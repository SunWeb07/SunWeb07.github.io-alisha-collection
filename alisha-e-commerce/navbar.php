<?php
 if (isset($_SESSION['email'])) {
 ?>
                <li ><a href="index.php">Home</a></li> 
 <li><a href = "cart.php"> Cart </a></li>
 <li><a href = "settings.php">
Settings</a></li>
 <li><a href = "logout_script.php"> Logout</a></li>
 
 <?php } 
 else {
 ?>
                <li ><a href="index.php">Home</a></li> 
 <li><a href="signup.php">
Sign Up</a></li>
 <li><a href="login.php">Login</a></li>
 <?php
 }
 ?>
