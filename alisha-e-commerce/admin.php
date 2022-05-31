<?php require "common.php";


 $uquery="SELECT * from users";
 $iquery="SELECT * from items";
 $uiquery="SELECT * from users_items";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alisha's Collection</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&family=Simonetta:wght@900&display=swap"
    rel="stylesheet">
    
   
    
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&family=Simonetta:wght@900&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;

font-family: 'Simonetta', cursive,'Open Sans', sans-serif;;
}
     
       
header{
    background-color: #000;
 display: flex;
 flex-direction: row;
    color:#fff;
    text-align: center;
}
.header{
    flex: 50%;
}
.header h1{
    font-size: 200%;
    padding: 10px;
    margin-top:10px ;
}
nav{

flex: 50%;}
ul{
    display: flex;
}
nav ul li{
list-style: none;
width: 15%;
padding: 10px;
margin: 10px;

}
nav ul li a{
    width: 100%;
    text-decoration: none;
    color: #fff;

}
li:hover{
    border: 1px solid #000;
    background-color: grey;
    
}
section{
    margin:10px 0 ;
    border: 2px solid grey;
}
section h2{
    text-align: center;
}
.tables{
    width: 100%;
    border: 1px solid black;
    padding: 10px;
}
.tables th,td{

    text-align: center;
    font-size: larger;
}
.tables tr{
    border: 1px solid #000;

}
tr th, tr td{
    border: 1px solid #000;
    padding: 10px;
}
     th a,  td a{
           color: black;
           border: 1px solid #000;
           margin:0 10px;
           text-decoration: none;

       }
      .tables a:hover{
        background-color: black;
        color: white;
     
    }
    </style>
<body>
  <header>
    <div class="header">
      <h1>Admin Panel</h1>
    </div>
    <nav>
      <ul>
      
 <li><a href = "logout_script.php"> Logout</a>
      </ul>

    </nav>
  </header>
  <main>
      <section>
          <h2>User Table</h2>
          <table class="tables">
              <thead>
                  <tr>
                      <th>Id</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Password</th>
                      <th>Contact</th>
                      <th>City</th>
                      <th>Address</th>
                      <th><a href="adminwork/createuser.php">Create</a></th>
                  </tr>
              </thead>
              <tbody>
                  <?php
                  $uqueryr=mysqli_query($con,$uquery) or die(mysqli_error($con));
                  while($row=mysqli_fetch_array($uqueryr)){
                      if($row['id']==1 || $row['id']==2)
                      continue;
                      else{
                          echo "<tr>";
                          echo "<td>".($row['id']-2)."</td>";
                          echo "<td>".$row['name']."</td>";
                          echo "<td>".$row['email']."</td>";
                          echo "<td>".$row['password']."</td>";
                          echo "<td>".$row['contact']."</td>";
                          echo "<td>".$row['city']."</td>";
                          echo "<td>".$row['address']."</td>";?>
                          <td><a href="adminwork/deleteuser.php?id=<?php echo $row['id'];?>">delete</i></a><a href="adminwork/updateuser.php?id=<?php echo $row['id'];?>">update</a></td>
                          <?php echo "</tr>";

                      }
                  }

                  ?>
              </tbody>
          </table>
      </section>
      <section>
          <h2>Items table</h2>
          <table class="tables">
              <thead>
                  <tr>
                      <th>Id</th>
                      <th>Name</th>
                      <th>Price</th>
                      <th><a href="adminwork/createitem.php">Create</a></th>
                  </tr>
              </thead>
              <tbody>
                  <?php 
                   $iqueryr=mysqli_query($con,$iquery) or die(mysqli_error($con));
                   while($row=mysqli_fetch_array($iqueryr)){
                              
                           echo "<tr>";
                           echo "<td>".$row['id']."</td>";
                           echo "<td>".$row['name']."</td>";
                           echo "<td>".$row['price']."</td>";?>
                           
                            <td><a href="adminwork/deleteitem.php?id=<?php echo $row['id'];?>">delete</i></a><a href="adminwork/updateitem.php?id=<?php echo $row['id'];?>">update</a></td>
                          <?php echo "</tr>";
 
                       
                    }
 
                  ?>
              </tbody>
          </table>
      </section>
      <section>
          <h2>User Item Table</h2>
          <table class="tables">
              <thead>
                  <tr>
                      <th>Id</th>
                      <th>Item Id</th>
                      <th>User Id</th>
                      <th>Status</th>
                      <th><a href="adminwork/createUI.php">Create</a></th>
                  </tr>
              </thead>
              <tbody>
                  <?php 
                   $uiqueryr=mysqli_query($con,$uiquery) or die(mysqli_error($con));
                   while($row=mysqli_fetch_array($uiqueryr)){
                              if($row['user_id']==1 ||$row['user_id']==2)
                              continue;
                              else{
                           echo "<tr>";
                           echo "<td>".$row['id']."</td>";
                           echo "<td>".$row['item_id']."</td>";
                           echo "<td>".$row['user_id']."</td>";
                           echo "<td>".$row['status']."</td>";?>
                           
                           <td><a href="adminwork/deleteUI.php?id=<?php echo $row['id'];?>">delete</i></a><a href="adminwork/updateUI.php?id=<?php echo $row['id'];?>">update</a></td>
                           <?php echo "</tr>";
                        }
                       
                    }
 
                  ?>
              </tbody>
          </table>
      </section>
  </main>
</body>
</html>