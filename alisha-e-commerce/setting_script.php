<?php require 'common.php';
if(!isset($_SESSION['email'])) header("location:index.php");

$olP =mysqli_real_escape_string($con, $_POST['password']);
$newP =mysqli_real_escape_string($con, $_POST['newPassword']);
$reP =mysqli_real_escape_string($con, $_POST['rePassword']);
$val = $_SESSION['email'];
if($newP == $reP and strlen($newP)>=6)
header("location:settings.php");
$getq="SELECT password from users where password=$olP";
$qre=mysqli_query($con,$getq) or die(mysqli_error($con));

?>
