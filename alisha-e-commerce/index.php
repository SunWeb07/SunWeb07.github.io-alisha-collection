<?php require 'common.php'; 
if(isset($_SESSION['email'])) {
 header('location: product.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alisha's Collection</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&family=Simonetta:wght@900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
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
  <main class="container">
    <section class="big">
      <div class="text">
        <h1>Alisha's Collection</h1>
        <p>Welcome to Alisha's Collection.</p>
        <p>A collection of Customised Braclets for your Loved One's.</p>
        <p>#DesignLove</p>
        <button><a href="product.php">Explore Collection</a></button>
       
      </div>
    </section>
    <section class="procard">
     
      <div class="card">
        <img src="./images/bracelets 2.webp" alt="" />
        <div class="card-body">
          <div class="row">
            <div class="card-title">
              <h4>Braclets</h4>
              <h3>1200Rs/-</h3>
            </div>
            
          </div>
          <hr />
          <p>
           A Lovely set of bracelets for your loved one's. Jewelry is something that has to do with emotion. That aspect of jewelry really interests me
          </p>
         
        </div>
      </div>
      </div>

      <div class="card">
        <img src="./images/bracelet 3.webp" alt="" />
        <div class="card-body">
          <div class="row">
            <div class="card-title">
              <h4>Braclets</h4>
              <h3>2000Rs/-</h3>
            </div>
            
          </div>
          <hr />
          <p>
           A Lovely set of bracelets for your loved one's. Jewelry is something that has to do with emotion. That aspect of jewelry really interests me
          </p>
       
          </div>
        </div>
      </div>

      <div class="card">
        <img src="./images/bracelet 4.webp" alt="" />
        <div class="card-body">
          <div class="row">
            <div class="card-title">
              <h4>Braclets</h4>
              <h3>1000Rs/-</h3>
            </div>
            
          </div>
          <hr />
          <p>
           A Lovely set of bracelets for your loved one's. Jewelry is something that has to do with emotion. That aspect of jewelry really interests me
          </p>
         
          
         
        </div>
      </div>


      <div class="card">
        <div id="next">
          <button>
            <a href="product.php">Click here for more</a>
          </button>
        </div>
      </div>
    </section>
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