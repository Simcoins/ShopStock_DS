
<?php 

session_start();
include('server.php');

if (!isset($_SESSION['username'])){
  $_SESSION['msg'] = 'you must login';
  header('location: login.php');
}

if ($_SESSION['role'] == 'user'){
  session_destroy();
  header('location: login.php');
}

if (isset($_GET['logout'])){
  session_destroy();
  unset($_SESSION['username']);
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
    <a class="navbar-brand" href="#">Stock</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <span class="nav-link active" aria-current="page" href="#">ยินดีต้อนรับคุณ  <strong><?php echo $_SESSION['username'];?></strong></span>
        </li>
    </div>
    <a class="btn btn-danger" type="submit" href="index.php?logout='1'" >logout</a>
  </div>
</nav>

<div class="container-md mt-5  ">
<h3 class="centertextmain mb-5">Ling Kang Shop Stock Delivery Admin System</h3>
<table class="table caption-top">
  <caption>รายชื่อสต็อกทั้งหมด</caption> <?php echo date('d/m/y');?>
  <?php if (isset($_SESSION['success'])) {?>
    <div class="alert alert-success" role="alert">
      <?php
      echo $_SESSION['success'];
      unset($_SESSION["success"]);
      ?>
    </div>
    <?php } ?>
    <?php if (isset($_SESSION['done'])) {?>
    <div class="alert alert-success" role="alert">
      <?php
      echo $_SESSION['done'];
      unset($_SESSION["done"]);
      ?>
    </div>
    <?php } ?>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">จำนวน Robux</th>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
      <th scope="col">DONE</th>
      <th scope="col">NOT DONE</th>
      <th scope="col">Deteil</th>
    </tr>
  </thead>
  <tbody>
    <?php
      $sql = "SELECT * FROM  stock ";
      $query = mysqli_query($conn, $sql);

      while ($row=mysqli_fetch_assoc($query)){
    
    ?>
      <tr>
      <td><?php echo $row["id"]?></td>
      <td><?php echo $row["amount"]?></td>
      <td><?php echo $row["id_roblox"]?></td>
      <td><?php echo $row["password_roblox"]?></td>
      <td><a href="Deleter_db.php?del=<?php echo $row["id"]?>" class="btn btn-success">DONE</a></td>
	<form action="Deleter_NOTDONE_db.php?del=<?php echo $row["id"]?>" method="post">
		  <td><button class="btn btn-success"  >NOT DONE</button></td>
      <td>
		  <input type="text" class="form-control" name="deteil">	
		</td>
		</form>
    </tr>
  
    <?php } ?>

  </tbody>
</table>
</div>
</div>

    

</body>
</html>