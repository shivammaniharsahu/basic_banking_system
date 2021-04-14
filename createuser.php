<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <link rel="stylesheet" type="text/css" href="css/createuser.css">
    
</head>
<body >
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">The Spark Bank</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
      <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="createuser.php">Create User</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="transfermoney.php">Transaction</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="transactionhistory.php">Transaction History</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

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
        <form style="text-align:center" method="post" >
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    
<script src="https://kit.fontawesome.com/4077c6ef6a.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
</body>
</html>