<?php require "../common.php";

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
<h2>Create a user</h2>

<div>

    <form  method="POST">
   
        <input placeholder="enter username" type="text" name="name" required/>
        <input type="email" name="email" placeholder="enter user email" id="" required>
        <input type="password" name="password" required placeholder="enter user password"/>
        <input type="tel" name="contact" id="" required placeholder="enter user contact">
        <input type="text" name="city" id="" required placeholder="enter user city">
        <input type="text" name="address" id="" required placeholder="enter user address">
        <button name="btn">Create</button>
    </form>
</div>
    <?php
     if(isset($_POST['btn'])){ 
    $name=mysqli_real_escape_string($con, $_POST['name']);
    $email=mysqli_real_escape_string($con, $_POST['email']);
    $password=mysqli_real_escape_string($con, $_POST['password']);
    $contact=mysqli_real_escape_string($con, $_POST['contact']);
    $city=mysqli_real_escape_string($con, $_POST['city']);
    $address=mysqli_real_escape_string($con, $_POST['address']);
    $create="INSERT INTO users(name,email,password,contact,city,address) VALUES ('$name','$email','$password','$contact','$city','$address')";
    $done=mysqli_query($con,$create) or die(mysqli_error($con));
    header("location:../admin.php");
     }
    ?>

</body>
</html>