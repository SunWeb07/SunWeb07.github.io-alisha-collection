<?php require "common.php";
$value = $_GET['id'];
$usval= $_SESSION['id'];
$query ="DELETE FROM users_items WHERE users_items.item_id=$value  and users_items.user_id = $usval";
$resultquery = mysqli_query($con,$query) or die(mysqli_error($con));
header('location:cart.php');
?>