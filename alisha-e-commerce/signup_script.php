<?php 
require 'common.php';

$name= mysqli_real_escape_string($con,$_POST['name']);
$email= mysqli_real_escape_string($con,$_POST['email']);
$password= mysqli_real_escape_string($con,$_POST['password']);
$contact= mysqli_real_escape_string($con,$_POST['contact']);
$city= mysqli_real_escape_string($con,$_POST['city']);
$address= mysqli_real_escape_string($con,$_POST['address']);

$s_q = "SELECT *  FROM users WHERE email='$email';";
$s_q_r = mysqli_query($con,$s_q) or die(mysqli_error($con));
$total_rowf = mysqli_num_rows($s_q_r);
if($total_rowf>0){
   
    header("location:signup.php");
}
else{
    $insert_it = "INSERT INTO users(name, email, password, contact, city, address) VALUES ('$name', '$email', '$password', '$contact', '$city', '$address')";
    
    $userinsert= mysqli_query($con,$insert_it) or die(mysqli_error($con));
    echo "user inserted";
$_SESSION['email']=$email;
$_SESSION['id']=mysqli_insert_id($con);
header("location:product.php");
}

?>