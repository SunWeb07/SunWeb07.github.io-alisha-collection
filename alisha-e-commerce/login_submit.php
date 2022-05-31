<?php 
require 'common.php'; 

$email =mysqli_real_escape_string($con, $_POST['email']);
$password =mysqli_real_escape_string($con, $_POST['password']);
$get_query = "SELECT id ,email from users WHERE email='$email' and password='$password'";
$g_q_r = mysqli_query($con,$get_query) or die(mysqli_error($con));

$total_rowf = mysqli_num_rows($g_q_r);
if($total_rowf==0){
    echo "user doesn't exist ";
    header("location:login.php");
}
else {
    $value = mysqli_fetch_array($g_q_r);
    $_SESSION['email']=$value['email'];
    $_SESSION['id']=$value['id'];
    if($value['id']==1 || $value['id']==2){
    header("location:admin.php");
}
    else 
    header("location:product.php");

}


?>
