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
    <h2>Create a cart</h2>
    <div>
    <form  method="POST">
       
        <input type="number" name="iid" required placeholder="enter item id"/>
        <input type="number" name="uid" required placeholder="enter user id"/>
        <select name="status" id="" required>
            <option value="Added to cart">Added to cart</option>
            <option value="Confirmed">Confirmed</option>
        </select>
        <button name="btn">Create</button>
    </form>
    </div>
    <?php 
    if(isset($_POST['btn'])){
    $iid=mysqli_real_escape_string($con, $_POST['iid']);
    $uiid=mysqli_real_escape_string($con, $_POST['uid']);
    $status=mysqli_real_escape_string($con, $_POST['status']);

    $create="INSERT INTO users_items(id,item_id,status,user_id) VALUES (NULL,'$iid','$status','$uiid')";
    $done=mysqli_query($con,$create) or die(mysqli_error($con));
    header("location:../admin.php");
    }
    ?>

</body>
</html>