<?php require "common.php";
if(!isset($_SESSION['email'])) header('location:index.php');
$total =$_GET['id'];
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #04AA6D;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}
.a-btn{
    background-color: #04AA6D;
  color: white;
  padding: 12px;

  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;

margin: 10px;
text-decoration: none;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
  text-align: center;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}
.gone{
    display: none;
    margin: 10px;
    border:1px solid grey;
    
}
.gone form{
    width: 100%;
    padding: 10px;

}
.gone input{
    margin: 10px 0;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</head>
<body>
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="">
      
        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input required type="text" id="fname" name="firstname" placeholder="John M. Doe">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input required type="text" id="email" name="email" placeholder="john@example.com">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input required type="text" id="adr" name="address" placeholder="542 W. 15th Street">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input required type="text" id="city" name="city" placeholder="New York">

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input required type="text" id="state" name="state" placeholder="NY">
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input required type="text" id="zip" name="zip" placeholder="10001">
              </div>
            </div>
          </div>

          <div class="col-50">
          <h3>Payment</h3>
          <label for="val"><input required type="radio" name="val" id="val1" value="CC" onclick="giveOption(0);"/>Accepted Cards</label>
          <div class="gone" id="div1">
          <div class="icon-container">
            <i class="fa fa-cc-visa" style="color:navy;"></i>
            <i class="fa fa-cc-amex" style="color:blue;"></i>
            <i class="fa fa-cc-mastercard" style="color:red;"></i>
            <i class="fa fa-cc-discover" style="color:orange;"></i>
          </div>
          <label for="cname">Name on Card</label>
          <input required type="text" id="cname" name="cardname" placeholder="John More Doe">
          <label for="ccnum">Credit card number</label>
          <input required type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
          <label for="expmonth">Exp Month</label>
          <input required type="text" id="expmonth" name="expmonth" placeholder="September">

          <div class="row">
            <div class="col-50">
              <label for="expyear">Exp Year</label>
              <input required type="text" id="expyear" name="expyear" placeholder="2018">
            </div>
            <div class="col-50">
              <label for="cvv">CVV</label>
              <input required type="text" id="cvv" name="cvv" placeholder="352">
            </div>
          </div>
        </div>
        <label for="val"><input required type="radio" name="val" id="val2" onclick="giveOption(1);" value="UPI"/>UPI</label>
        <div id="div2" class="gone">
            <form action="">
                <label for="">UPI Id:</label> <input required type="text" name=""  id="" placeholder="Enter UPI Id">

            </form>
        </div>
        <label for="val"><input required type="radio" name="val" id="val3" onclick="giveOption(2);" value="NET"/>Net Banking</label>
        <div class="gone" id="div3">
            <form action="">
                <label for="">Username: </label><input required type="text" name="" id="" placeholder="Enter Username">
                <label for="">Password: </label><input required type="password" name="" id="" placeholder="Enter Password">
            </form>
        </div>
        
        <label for="val"><input required type="radio" name="val" value="COD"/>Cash on Delivery</label>
    </div>

      </div>
      <label>
        <input required type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
      </label>
      <div class="col-25">
  <div class="container">
    <h1>Email</h1>
<p><?php echo $_SESSION['email'];?></p>
    <hr>
    <p>Total <span class="price" style="color:black"><b><?php echo $total; ?></b></span></p>
  </div>
</div>
      <a class="a-btn" href="success.php?id=<?php echo $_SESSION['email'];?>">Continue to checkout</a>
    </form>
  </div>
</div>


</div>
<script>
        let is1 = document.getElementById('div1');
let is2 = document.getElementById('div2')
let is3 = document.getElementById('div3');
   
    function giveOption(x){

      if(x==0)
      {
        is1.style.display="block";

   is2.style.display="none";
   is3.style.display="none";

      }
      
      else if(x==1)
      {
        is1.style.display="none";

   is2.style.display="block";
   is3.style.display="none";
      }
      else if(x==2)
      {
        is1.style.display="none";

   is2.style.display="none";
   is3.style.display="block";

      }
    }
    </script>
</body>
</html>
