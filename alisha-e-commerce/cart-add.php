<?php
$get_val=$_GET['id'];

require 'common.php';   

$user_id=$_SESSION['id'];
echo $user_id.$get_val;
$insert_q ="INSERT INTO users_items(id,item_id,status,user_id) VALUES (NULL,'$get_val', 'Added to cart','$user_id');";
$g_q_r = mysqli_query($con,$insert_q) or die(mysqli_error($con));
header("location:product.php");

?>