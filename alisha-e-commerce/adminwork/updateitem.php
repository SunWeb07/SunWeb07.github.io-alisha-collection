<?php require "../common.php";
$val =mysqli_real_escape_string($con, $_GET['id']);
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
<h2>Update a item</h2>
<div>
    <form  method="POST">
      
        <input required type="text" name="name" placeholder="enter item name"/>
        <input required type="number" name="price" placeholder="enter item price"/>
        <button name="btn">Update</button>
    </form>
</div>
    <?php 
     if(isset($_POST['btn'])){
        
    $name=mysqli_real_escape_string($con, $_POST['name']);
    $price=mysqli_real_escape_string($con, $_POST['price']);
    $update="UPDATE items SET name='$name',price='$price' WHERE id = '$val'";
    $done=mysqli_query($con,$update) or die(mysqli_error($con));
    header("location:../admin.php");
     }
    ?>

</body>
</html>