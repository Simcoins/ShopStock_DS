
<?php 
session_start();
include('server.php'); 


if (!isset($_SESSION['username'])){
  $_SESSION['msg'] = 'you must login';
  header('location: login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stock</title>
    <link href="node_modules/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg colorNavbar ">
  <div class="container-fluid">
    <a class="navbar-brand" href="user.php">Stock</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <span class="nav-link active" aria-current="page" href="#">TEST</span>
        </li>
</nav>
<div class="container-md mt-5  ">
  <div class="center"><strong>STOCK</strong></div>
<div class="center"> 
  <form action = "stock_db.php" method="post">
  <div class="mb-3 ">
    <label for="text" class="form-label">Amount</label>
    <input type="text" class="form-control" name="amount">
  </div>
  <div class="mb-3 ">
    <label for="username" class="form-label">Username</label>
    <input type="text" class="form-control" name="username">
  </div>
  <div class="mb-3 ">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" name="password">
  </div>
  <div class="mb-3 ">
    <label for="time" class="form-label">Timeout เช่น 22/09/2023 20:15PM</label>
    <input type="text" class="form-control" name="time">
  </div>
  <div class="mb-3 ">
    <label for="Owner" class="form-label">Owner</label>
    <input type="text" class="form-control" name="Owner">
  </div>
  <button type="submit" name="sub_id" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
 


</body>
</html>