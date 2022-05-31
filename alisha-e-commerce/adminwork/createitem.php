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
<h2>Create a item</h2>
<div>
    <form action="" method="POST">
        
        <input type="text" name="name" required placeholder="enter item name"/>
        <input type="number" name="price" required placeholder="enter item price"/>
        <button name="btn">Create</button>
    </form></div>
    <?php 
 if(isset($_POST['btn'])){
    $name=mysqli_real_escape_string($con, $_POST['name']);
    $price=mysqli_real_escape_string($con, $_POST['price']);
    $create="INSERT INTO items(name,price) VALUES ('$name','$price')";
    $done=mysqli_query($con,$create) or die(mysqli_error($con));
    header("location:../admin.php");
 }
    ?>


</body>
</html>