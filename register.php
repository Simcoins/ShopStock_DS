
<?php include('server.php'); ?>
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
    <a class="navbar-brand" href="#">Stock</a>
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
  <div class="center"><strong>REGISTER</strong></div>
<div class="center"> 
  <form action = "register_db.php" method="post">
    <?php include('error.php');?>
  <div class="mb-3 ">
    <label for="text" class="form-label">Username</label>
    <input type="text" class="form-control" name="username">
  </div>
  <div class="mb-3 ">
    <label for="email" class="form-label">email</label>
    <input type="email" class="form-control" name="email">
  </div>
  <div class="mb-3 ">
    <label for="password_1" class="form-label">Password</label>
    <input type="password" class="form-control" name="password_1">
  </div>
  <div class="mb-3 ">
    <label for="password_2" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" name="password_2">
  </div>
  <button type="submit" name="reg_user" class="btn btn-primary">register</button>
  <p> Already have member? <a href="login.php">login</a></p>
</form>
</div>
</div>
 


</body>
</html>