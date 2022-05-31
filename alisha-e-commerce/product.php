<?php require 'common.php'; 
 $get_query = "SELECT id,name,price FROM items";
 $sqr = mysqli_query($con,$get_query);
 $i=0;
 $images = array("images/bracelets.webp","images/bracelets 2.webp","images/bracelet 3.webp","images/bracelet 4.webp","images/b 5.webp","images/b6.webp","images/b7.webp","images/b8.webp","images/b10.webp","images/b11.webp","images/b12.webp","images/b13.webp");
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
</head>
<style>
#procard {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}
</style>

<body>
  <header>
    <div class="header">
      <h1>Alisha's Collection</h1>
    </div>
    <nav>
      <ul>
     <?php include 'navbar.php';
     include 'check-if-added.php'; ?>

      </ul>
    </nav>
  </header>
  <main class="container">
    <div id="procard">
    <?php while($row=mysqli_fetch_array($sqr) and  $i<=count($images)) { ?>
      <div class="card">
   
       
       <?php echo "<img src='".$images[$i]."'>"; ?>
    
        <div class="card-body">
          <div class="row">
            <div class="card-title">
              <h4><?php echo $row['name']; ?></h4>
              <h3><?php echo $row['price'];?>Rs/-</h3>
            </div>
          
          </div>
          <hr />
          <p>
          A Lovely set of bracelets for your loved one's. Jewelry is something that has to do with emotion. That aspect of jewelry really interests me
      
          </p>
          <div class="btn-group">
            <div class="btn">
             
                           <a href="cart-add.php?id=<?php echo $row['id'];?>" name="add" value="add">Add to Cart</a>
                               
            </div>

          </div>
        </div>
      </div>
<?php $i++;}?>
    </div>
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