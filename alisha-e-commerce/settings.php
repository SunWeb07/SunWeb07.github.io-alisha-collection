<?php require 'common.php';
if(!isset($_SESSION['email'])) header("location:index.page");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Products</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&family=Simonetta:wght@900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login.css">
</head>
<style>

</style>

<body>
    <header>
        <div class="header">
            <h1>Alisha's Collection</h1>
        </div>
        <nav>
            <ul>
               <?php include "navbar.php";?>

            </ul>
        </nav>
    </header>
    <main class="container">
        <div class="wrapper">
            <div class="inner-warpper text-center">
                <h2 class="title">Change Password</h2>
                <form action="setting_script.php" method="POST" id="formvalidate">
                    <div class="input-group">
                        <label class="palceholder" for="password">Old Password</label>
                        <input class="form-control" name="password" id="password" type="password"
                            placeholder="" />
                        <span class="lighting"></span>
                    </div>
                    <div class="input-group">
                        <label class="palceholder" for="newPassword"> New Password</label>
                        <input class="form-control" name="newPassword" id="newPassword" type="password"
                            placeholder="" />
                        <span class="lighting"></span>
                    </div>
                    <div class="input-group">
                        <label class="palceholder" for="rePassword">Re-type New Password</label>
                        <input class="form-control" name="rePassword" id="rePassword" type="password" placeholder="" />
                        <span class="lighting"></span>
                    </div>

                    <button type="submit" id="login">Submit</button>

                </form>
            </div>

        </div>



        <!-- partial -->
        <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js'></script>
        <script src="./js/script.js"></script>

    </main>
    <footer>
        <h3>Know<br />&downarrow;&downarrow;</h3>
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