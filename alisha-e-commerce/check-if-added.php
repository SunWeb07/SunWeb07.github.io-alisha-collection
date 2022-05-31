<?php
 function check_if_added_to_cart($item_id){
    require "common.php";
    $user_id =$_SESSION['id'];
  $val=  "SELECT * FROM users_items WHERE item_id='$item_id' AND user_id ='$user_id' and 
status='Added to cart'";
$gqr = mysqli_query($con,$val) or die(mysqli_error($con));
$total_rowf = mysqli_num_rows($gqr);
if($total_rowf>=1){
   
    return 1;
}
else return 0;

}

?>