
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
    </div>
    <a class="btn btn-primary" type="submit" href="register.php">register</a>
  </div>
</nav>

<div class="container-md mt-5  ">
<h3 class="centertextmain mb-5">Ling Kang Shop Stock Delivery System</h3>
<div class="center"> 
  <form action="login_db.php" method="post">
  <div class="mb-3 ">
    <label for="exampleInputEmail1" class="form-label">Username</label>
    <input type="text" class="form-control" name="username">
  </div>
  <div class="mb-3 ">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="password">
  </div>
  <button type="submit" class="btn btn-primary" name="login_user">login</button>
</form>
</div>
</div>



</body>
</html>