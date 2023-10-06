
<?php 

session_start();
include('server.php');

if (!isset($_SESSION['username'])){
  $_SESSION['msg'] = 'you must login';
  header('location: login.php');
}

if ($_SESSION['role'] == 'admin'){
  session_destroy();
  header('location: index.php');
}

if (isset($_GET['logout'])){
  session_destroy();
  unset($_SESSION['username']);
  header('location: login.php');
}

if (isset($_SESSION['DONE'])){
  $done = $_SESSION['DONE'];
}   


$error = array();


// if (count($error) == 0){

//   $startin = +1;

// $rows_per_pagein = +1;


// }

// $startins = 0;

// $rows_per_pageins = 9;


// $starte =  0 ;
// $rows_per_pagee = 9;
// $startin =  +1 ;
// $rows_per_pagein = +1;
// $st = $starte + $startin ;
// $ft = $rows_per_pagee + $rows_per_pagein;

// $mysqli = "SELECT * FROM check_stock LIMIT 1, 8";

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
        <a class="btn btn-success" type="submit" href="stock.php" >Sent Stock</a>
    </div>
    <a class="btn btn-danger" type="submit" href="index.php?logout='1'" >logout</a>
  </div>
</nav>

<div class="container-md mt-5  ">
<h3 class="centertextmain mb-5">Ling Kang Shop Stock Delivery User System</h3>
<table class="table caption-top">
  <caption>รายชื่อสต็อกทั้งหมด</caption>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">จำนวน Robux</th>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
      <th scope="col">Timeout</th>
      <th scope="col">Owner</th>
      <th scope="col">สถานะ</th>
    </tr>
  </thead>
  <tbody>
    <?php
      $sql = "SELECT * FROM check_stock  order by id DESC LIMIT 10 ";  
      $query = mysqli_query($conn, $sql);

      while ($row=mysqli_fetch_assoc($query)){
    
    ?>
    <tr>
      <td><?php echo $row["id"]?></td>
      <td><?php echo $row["amount"]?></td>
      <td><?php echo $row["id_roblox"]?></td>
      <td><?php echo $row["password_roblox"]?></td>
      <td><?php echo $row["Timeout"]?></td>
      <td><?php echo $row["owner"]?></td>
      <td><button type="button" class="btn btn-secondary"><?php echo $row["stats"];?></button></td>
    </tr>
    <?php } ?>

  </tbody>
</table>
</div>
</div>


 
    

</body>
</html>