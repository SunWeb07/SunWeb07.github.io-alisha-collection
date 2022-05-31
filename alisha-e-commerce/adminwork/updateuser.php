<?php require "../common.php";
$val =$_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;

    }
    h2{
      text-align: center;
        font-size: 400%;
    }
   div{
        display: flex;
        justify-content: center;
        align-items: center;
        height: 80vh;
    }
    form input{
        display: block;
        width: 100%;
            border: 1px solid black;
            padding: 10px;
            margin: 10px;
    }
    form select{
        display: block;
        width: 100%;
            border: 1px solid black;
            padding: 10px;
            margin: 10px;
    }
    form button{
        display: block;
        width: 100%;
            border: 1px solid black;
            padding: 10px;
            margin: 10px;
    }
</style>
<body>
<h2>Update a user</h2>
    <div><form  method="POST">
        <input required type="number" name="id" placeholder="enter user id"/>
        <input required type="text" name="name" placeholder="enter user name"/>
        <input required type="email" name="email" id="" placeholder="enter user email">
        <input required type="password" name="password" placeholder="enter user password"/>
        <input required type="tel" name="contact" id="" placeholder="enter user contact">
        <input required type="text" name="city" id="" placeholder="enter user city">
        <input required type="text" name="address" id="" placeholder="entert user address">
        <button name="btn">Update</button>
    </form>
    </div>    <?php 
     if(isset($_POST['btn'])){
    $id=mysqli_real_escape_string($con, $_POST['id']);
    $name=mysqli_real_escape_string($con, $_POST['name']);
    $email=mysqli_real_escape_string($con, $_POST['email']);
    $password=mysqli_real_escape_string($con, $_POST['password']);
    $contact=mysqli_real_escape_string($con, $_POST['city']);
    $city=mysqli_real_escape_string($con, $_POST['contact']);
    $address=mysqli_real_escape_string($con, $_POST['address']);
    $update="UPDATE users SET id='$id',name='$name',email = '$email',password='$password',contact='$contact',city='$city',address='$address' WHERE id = '$val'";
    $done=mysqli_query($con,$update) or die(mysqli_error($con));
    header("location:../admin.php");
     }
    ?>

</body>
</html>