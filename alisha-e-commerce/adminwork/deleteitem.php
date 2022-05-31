<?php require "../common.php";

$val =$_GET['id'];
$delete = "DELETE FROM items WHERE items.id=$val";
$done= mysqli_query($con,$delete) or die(mysqli_error($con));
header("location:../admin.php");
?>