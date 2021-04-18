<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/createuser.css">
    
    <link rel="stylesheet" type="text/css" href="css/bg.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
</head>
<body >
<!-- navbar -->
  
<div class="bg"></div>
<div class="bg bg2"></div>
<div class="bg bg3"></div>

<div class="topnav" id="myTopnav">
  <a href="index.php" style="text-shadow: 0 0 3px #FF0000, 0 0 5px #0000FF;"  class="active">The Spark Bank</a>
  <a href="index.php">Home</a>
  <a href="createuser.php">Create User</a>
  <a href="transfermoney.php">Transaction</a>
  <a href="transactionhistory.php">Transaction History</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>

<!-- end of navbar -->
<?php
    include 'config.php';
    if(isset($_POST['submit'])){
    
    $name=$_POST['name'];
    $email=$_POST['email'];
    $balance=$_POST['balance'];
    $sql="insert into users(name,email,balance) values('{$name}','{$email}','{$balance}')";
    $result=mysqli_query($conn,$sql);
    if($result){
               echo "<script> alert('Hurray! User created');
                               window.location='transfermoney.php';
                     </script>";
                    
    }
  }
?>
 
<div  class="row">
 <div  class="col sm-6 col md-6 col lg-6"></div>

 <div  class="col sm-3 col md-3 col lg-3">
  <div  class="formDiv" style="text-align:center">
        <h1 class="title" style="
    text-shadow: 0 0 3px #FF0000, 0 0 5px #0000FF;">Create a User</h1>
        <form  method="post" >
            <div style="text-align:center" class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="name" placeholder="Name" required>
            </div>
            <div style="text-align:center" class="input-group">
            <i class="fas fa-envelope"></i>
                <input style="width: 150px;" type="email" name="email" placeholder="Email" required>
            </div>
            
            <div style="justify-content:center" class="input-group">
            <i class="fas fa-money-check"></i>
                <input type="number" name="balance" placeholder="Balance" required>
            </div>
            <button type="submit" value="CREATE" name="submit" class="btn">Create</button>
        </form>
    </div>
   </div> 
   <div class="col sm-3 col md-3 col lg-3"></div>
</div>
<script>
        function myFunction() {
          var x = document.getElementById("myTopnav");
          if (x.className === "topnav") {
            x.className += " responsive";
          } else {
            x.className = "topnav";
          }
        }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    
<script src="https://kit.fontawesome.com/4077c6ef6a.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
</body>
</html>