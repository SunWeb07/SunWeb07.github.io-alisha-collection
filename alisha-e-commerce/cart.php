<?php 
    require "common.php";
    if(isset($_SESSION['mail']))
     header("location:login.php");
    $value=$_SESSION['id'];
    $sum=0;
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

</style>

<body>
    <header>
        <div class="header">
            <h1>Alisha's Collection</h1>
        </div>
        <nav>
            <ul>
                <?php include 'navbar.php' ?>

            </ul>
        </nav>
    </header>
    <main class="container">
        <table class="table">

            <thead>
                <tr>
                    <th>Item Number</th>
                    <th>Item Name</th>
                    <th>Price</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                
                    <?php 
                    $get_query="SELECT DISTINCT items.id, items.name, items.price
                    FROM ((items
                    INNER JOIN users_items ON items.id = users_items.item_id)
                    INNER JOIN users ON users_items.user_id = $value)";
                    $gqr = mysqli_query($con,$get_query) or die(mysqli_error($con));
                    $total_rowf = mysqli_num_rows($gqr);
                  
                    $i=0;
if($total_rowf==0){
    echo "Add items to cart first";
}  
else {
     
   
    while($row=mysqli_fetch_array($gqr) ){
echo implode(" ",$row);
                echo    "<tr><td>".$row['id']."</td>";
                echo    "<td>".$row['name']."</td>";
                echo    "<td>".$row['price']."</td>";
                echo   "<td>";?>
                <a href='cart-remove.php?id=<?php echo $row['id'];?>'>Remove</a>
            <?php echo "</td></tr>";
    $sum+=$row['price'];
    }
}
    ?>
                
                <tr>
                    <td>Total</td>
                    <td><?php if($sum==0){ echo "Nothing in the cart";} else echo $sum;?></td>
                    <td>Rs/-</td>
                    <td>
                    <button><a href="checkout.php?id=<?php echo $sum;?>">Confirm Order</a></button>
                        <!-- <button><a href="success.php?id=<?php //echo $value;?>">Confirm Order</a></button> -->
                    </td>
                </tr>
            </tbody>
        </table>
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