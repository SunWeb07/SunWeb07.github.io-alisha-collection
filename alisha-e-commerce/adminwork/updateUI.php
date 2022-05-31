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
<h2>Update a cart</h2>
<div>
    <form  method="POST">
        <input type="number" name="id" placeholder="enter id" required/>
        <input type="number" name="iid" placeholder="enter item id" required/>
        <input type="number" name="uid" placeholder="enter user id" required/>
        <select name="status" id="" required>
            <option value="Added to Cart">Added to Cart</option>
            <option value="Confirmed">Confirmed</option>
        </select>
        <button name="btn">Update</button>
    </form>
</div>
    <?php 
     if(isset($_POST['btn'])){
    $id=mysqli_real_escape_string($con, $_POST['id']);
    $iid=mysqli_real_escape_string($con, $_POST['iid']);
    $uiid=mysqli_real_escape_string($con, $_POST['uid']);
    $status=mysqli_real_escape_string($con, $_POST['status']);
    $update="UPDATE users_items SET id='$id',item_id='$iid', status='$status',user_id = '$uiid' WHERE id = '$val'";
    $done=mysqli_query($con,$update) or die(mysqli_error($con));
    header("location:../admin.php");
     }
    ?>

</body>
</html>